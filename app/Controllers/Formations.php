<?php

namespace App\Controllers;

class Formations extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('formations');
        echo view('commun/footer');
    }
}
