<?php

namespace App\Controllers;

class Projets extends BaseController
{
    public function index()
    {
        $parametres['projetsAcademiques'] = array(
            array(
                'titre' => 'Développement d"un logiciel - Générateur de plateau pour le jeu Les Aventuriers du Rail',
                'description' => 'Réalisé en Java en groupe de 5, le projet permet à l"utilisateur de générer un plateau en y positionnant des noeuds et des arêtes sur une image. Puis ensuite d"y jouer en réseau local',
                'taches'=> 'Formalisation du besoin, Réalisation d"un cahier des charges, Proposition de conception, implémentation et tests du développement'
            ),
            array(
                'titre' => 'Développement d"un application web - Générateur de portfolio et CV',
                'description' => 'Réalisé en PHP, HTML, CSS, JS, le projet permet à l"utilisateur de créer un compte et de générer un portfolio et un CV en fonction de ses informations',
                'taches'=> 'Phase de conception, Implémentation et tests du développement'
            ),
            array(
                'titre' => 'Base de données - Bibliothèque',
                'description' => 'Réalisé en SQL et plus précisément PostgreSQL',
                'taches' => 'Conception, Implémentation, Administration et exploitation d"une base de données'
            ),
        );

        $parametres['projetsPersonnels'] = array(
            array(
                'titre' => 'Développement d"un jeu en 2D',
                'image' => '/assets/images/jeu2D.png',
                'description' => 'Réalisé en Java, le projet est un jeu en 2D où le joueur doit éviter des obstacles et récupérer des clés pour ouvrir la porte de sortie',
                'taches' => 'Implémentation (en cours)'
            ),
            array(
                'titre' => 'Calculatrice',
                'description' => 'Réalisé en Java, le projet est une calculatrice permettant de faire des calculs simples',
                'taches' => 'Implémentation (en cours)'
            ),
            array(
                'titre' => 'Générateur de portfolio et CV',
                'description' => 'Réalisé en ReactJS et Laravel, le projet permet à l"utilisateur de créer un compte et de générer un portfolio et un CV en fonction de ses informations',
                'taches' => 'Implémentation (en cours)'
            ),
        );

        echo view('commun/header');
        echo view('projets', $parametres);
        echo view('commun/footer');
    }
}
