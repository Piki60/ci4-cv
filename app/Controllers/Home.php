<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('home');
        echo view('commun/footer');
    }
}
