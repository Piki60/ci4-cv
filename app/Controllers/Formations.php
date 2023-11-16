<?php

namespace App\Controllers;

class Formations extends BaseController
{
    public function index()
    {
        $parametres['imagesFormation'] = array(
            'assets/images/logoIUT.jpg',
            'assets/images/logoLycee.jpg'
        );

        $parametres['nomFormation'] = array(
            'BUT Informatique',
            'Baccalauréat Série Générale'
        );

        $parametres['dateFormation'] = array(
            '2021-2024 (3ème année)',
            '2021'
        );

        $parametres['lieuFormation'] = array(
            'IUT Le Havre',
            'Lycée Louise Michel'
        );

        $parametres['descFormation'] = array(
            'Parcours : Réalisation d’applications : conception, développement, validation',
            'Spécialités SVT et Mathématiques. Mention Assez Bien.'
        );

        echo view('commun/header');
        echo view('formations', $parametres);
        echo view('commun/footer');
    }
}
