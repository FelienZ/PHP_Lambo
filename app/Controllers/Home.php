<?php

namespace App\Controllers;

class Home extends BaseController
{
    //update pakai renderSection / template
    public function index()
    {
        $data = [
            'title' => 'Home Pages'
        ];
        echo view('pages/HomePage', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Pages'
        ];
        echo view('pages/About', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Pages'
        ];
        echo view('pages/Contact',$data);
    }
}
