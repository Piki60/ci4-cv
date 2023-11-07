<?php

namespace App\Controllers;

class Experiences extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('experiences');
        echo view('commun/footer');
    }
}
