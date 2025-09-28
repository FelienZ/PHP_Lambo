<?php

namespace App\Controllers;

use App\Models\ProjectsModel;

class Home extends BaseController
{
    protected $projectsModel;
    //update pakai renderSection / template
    public function __construct(){
        //gunakan construct agar instancenya cukup satu kali (kalau hanya 1 controller butuh, kalau semua buat di base instancenya)
        $this -> projectsModel = new ProjectsModel();
    }
    public function index()
    {
        $projects = $this->projectsModel->findAll();
        $data = [
            'title' => 'Home Pages',
            'projects' => $projects
        ];
        return view('pages/HomePage', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Pages'
        ];
        return view('pages/About', $data);
    }
}
