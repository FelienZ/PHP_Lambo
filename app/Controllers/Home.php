<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function HomeScreen()
    {
        echo view('layout/header');
        echo view('Home');
        echo view('layout/footer');
    }
}
