<?php

namespace App\Controllers;

class Contacts extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('contacts');
        echo view('commun/footer');
    }
}
