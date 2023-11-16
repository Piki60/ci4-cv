<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon site</title>
        <!-- SCRIPT POUR BOOTSTRAP -->
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css')?>" type="text/css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>

        <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js')?>">
    </script>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg p-3 mb-5">

        <div class="container-fluid">

            <a class="navbar-brand"
                href="<?php echo base_url('/')?>">Alexandra Desplan</a>

            <!-- Bouton pour afficher le menu sur mobile -->
            <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    
                    <li class="nav-item">
                        
                        <a class="nav-link btn btn-outline-primary me-2 rounded-pill" 
                           href="<?php echo base_url('formations')?>">Formations
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary me-2 rounded-pill"
                           href="<?php echo base_url('experiences')?>">Expériences
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary me-2 rounded-pill"
                           href="<?php echo base_url('competences')?>">Compétences</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary me-2 rounded-pill"
                            href="<?php echo base_url('projets')?>">Projets</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary me-2 rounded-pill"
                            href="<?php echo base_url('contacts')?>">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>