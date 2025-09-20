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
