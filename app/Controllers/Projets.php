<?php

namespace App\Controllers;

class Projets extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('projets');
        echo view('commun/footer');
    }
}
