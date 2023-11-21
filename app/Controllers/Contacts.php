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
        //On récupère les données du formulaire
        $isValid = $this->validate([
            'nom' => 'required|min_length[3]|max_length[20]',
            'prenom' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
            'sujet' => 'required|min_length[3]|max_length[20]',
            'message' => 'required|min_length[10]|max_length[1000]',
            'pieceJointe' => 'uploaded[pieceJointe]|max_size[pieceJointe, 1024]|ext_in[pieceJointe,pdf,doc,docx,jpg,jpeg,png,gif,txt]'
        ]);

        //Si les données ne sont pas valides
        if(!$isValid){

            $data['validation'] = $this->validator;
            return view('commun/header') . view('contacts/index', $data) . view('commun/footer');
   
        } else {

            $request = \Config\Services::request();

            $data['contacts'] = $request->getPost();

            [$data['nom'], 
             $data['prenom'], 
             $data['email'], 
             $data['sujet'], 
             $data['message'],
             $data['pieceJointe']
             ] = array_values($data['contacts']);

            //configuration de l'email
            $email = \Config\Services::email();

            $email->setFrom($data['email'], $data['nom'] . ' ' . $data['prenom']);
            $email->setTo('alexandradesplan@gmail.com');
            $email->setSubject($data['sujet']);
            $email->setMessage($data['message']);


            //Si une pièce jointe a été ajoutée
            if($data['pieceJointe'] != ''){

                $attachment = $request->getFile('pieceJointe');
                if ($attachment->isValid() && !$attachment->hasMoved())
                {
                    $email->attach($attachment->getPathname(), 'inline', $attachment->getName());
                }

            }
            
            //On envoie le mail
            if($email->send()){
                return view('commun/header') . view('contacts/success', $data) . view('commun/footer');
            } else {
                echo $email->printDebugger();
            }

        }

    }
}
