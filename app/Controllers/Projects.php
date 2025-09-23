<?php

namespace App\Controllers;

use App\Models\ProjectsModel;

class Projects extends BaseController
{
    protected $projectsModel;
    public function __construct(){
        //gunakan construct agar instancenya cukup satu kali (kalau hanya 1 controller butuh, kalau semua buat di base instancenya)
        $this -> projectsModel = new ProjectsModel();
    }
    //update pakai renderSection / template
    public function index()
    {
        $projects = $this->projectsModel -> findAll();
        $data = [
            'title' => 'My Projects',
            'projects' => $projects
        ];

        //Query ke db tanpa model
        /* $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM projects');
        foreach($query -> getResultArray() as $row)
        dd($row); */

        //dengan model -> instance Model dengan NameSpace
        // $projectsModel = new ProjectsModel();
        return view('projects/index', $data);
    }
    public function formadd(){
        session();
        $data = [
            'title' => 'Add New Projects',
            'validation' => \Config\Services::validation()
        ];
        return view('projects/FormAdd', $data);
    }
    public function save(){
        $id = bin2hex(random_bytes(16));

        if(!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[projects.title]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} duplikat'
                ]
            ],
            'url' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'image' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/projects/formadd')->withInput()->with('validation', $validation);
        }
        $data = [
            'id' => $id,
            'title' => $this->request->getPost('name'),
            'image_url' => $this->request->getPost('image'),
            'url' => $this->request->getPost('url'),
            'status' => $this->request->getPost('status'),
        ];
        $this->projectsModel->insert($data);

        session()->setFlashdata('message', 'Berhasil Menambahkan!');
        return redirect()->to('/projects');
    }
    
    public function edit($id){

        $data = [
            'title' => 'Edit Pages',
            'validation' => \Config\Services::validation(),
            'projects' => $this->projectsModel->find($id)
        ];
        return view('projects/FormEdit', $data);
    }
    
    public function delete($id){
        $this->projectsModel->delete($id);
        session()->setFlashdata('message', 'Berhasil Hapus!');
        return redirect()->to('/projects');
    }

    public function update($id){
        if(!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[projects.title]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} duplikat'
                ]
            ],
            'url' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'image' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/projects/edit/'.$id)->withInput()->with('validation', $validation);
        }
        $data = [
            'id' => $id,
            'title' => $this->request->getPost('name'),
            'image_url' => $this->request->getPost('image'),
            'url' => $this->request->getPost('url'),
            'status' => $this->request->getPost('status'),
        ];
        $this->projectsModel->save($data);
        session()->setFlashdata('message', 'Berhasil Memperbarui!');
        return redirect()->to('/projects');
    }
}