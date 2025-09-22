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
        $data = [
            'title' => 'Add New Projects'
        ];
        return view('projects/FormAdd', $data);
    }
    public function save(){
        $id = bin2hex(random_bytes(16));
        $data = [
            'id' => $id,
            'title' => $this->request->getPost('project_name'),
            'image_url' => $this->request->getPost('project_img'),
            'url' => $this->request->getPost('project_url'),
            'status' => $this->request->getPost('project_status'),
        ];
        $this->projectsModel->insert($data);
        return redirect()->to('/projects');
    }
    
}