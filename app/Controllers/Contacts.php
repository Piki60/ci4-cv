<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contacts extends Controller
{

    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        echo view('commun/header');
        echo view('contacts/index');
        echo view('commun/footer');
    }

    public function save()
    {
        $isValid = $this->validate([
            'nom' => 'required|min_length[3]|max_length[20]',
            'prenom' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
            'sujet' => 'required|min_length[3]|max_length[20]',
            'message' => 'required|min_length[10]|max_length[1000]',
        ]);

        if(!$isValid){

            return view('commun/header') . view('contacts/index', [
                'validation' => $this->validator
            ]) . view('commun/footer');
            
        } else {

            $request = \Config\Services::request();

            $data['contacts'] = $request->getPost();

            [$data['nom'], 
             $data['prenom'], 
             $data['email'], 
             $data['sujet'], 
             $data['message']] = array_values($data['contacts']);

            $email = \Config\Services::email();

            //setFrom et setTo sont des méthodes de la classe Email
            //setFrom permet de définir l'expéditeur
            //setTo permet de définir le destinataire

            $email->setFrom($data['email'], $data['nom'] . ' ' . $data['prenom']);
            $email->setTo('alexandradesplan@gmail.com');
            
            $email->setSubject($data['sujet']);
            $email->setMessage($data['message']);

            if ($email->send()) 
            {
                echo view('commun/header');
                echo view('contacts/success', $data);
                echo view('commun/footer');
            } else {
                echo $email->printDebugger(['headers']);
            }

        }

    }
}
