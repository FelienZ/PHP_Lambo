<?php

namespace App\Controllers;

class Projects extends BaseController
{
    //update pakai renderSection / template
    public function index()
    {
        $data = [
            'title' => 'My Projects'
        ];
        return view('projects/index', $data);
    }

}