# CodeIgniter 4 - CV - Programmation avancée

## R5.05 - Programmation avancée - CodeIgniter 4

Projet académique de programmation avancée pour nous familiariser avec le framework CodeIgniter 4.
Réalisation d'un CV en ligne avec un formulaire de contact. Chaque page correspond à une section du CV classique.
Réalisé par : Alexandra DESPLAN

## Setup

Copiez `env` en `.env` et adaptez-le à votre application, en particulier le mode.
Changez la valeur de `CI_ENVIRONMENT` en `development` pour activer le mode de développement.

## Lancement du projet

Pour lancer le projet, il faut lancer le serveur local avec la commande `php spark serve` dans le dossier racine du projet.
Le port par défaut est le 8080, mais vous pouvez le changer en ajoutant le numéro de port à la fin de la commande ou en changeant la valeur de `$baseURL` dans le fichier `app/Config/App.php`.

## Envoie de mail

Pour vérifier l'envoi de mail, veuillez modifier les valeurs de `app/Config/Email.php` avec vos informations personnelles.

`public string $protocol = 'smtp';` : protocole d'envoi de mail (smtp, sendmail, mail)

`public string $SMTPHost = 'smtp.gmail.com';` : serveur SMTP (smtp.gmail.com, smtp.live.com, smtp.mail.yahoo.com)

`public string $SMTPUser = 'alexandradesplan@gmail.com';` : adresse mail de l'expéditeur

`public string $SMTPPass = '********';` : mot de passe de l'expéditeur (notez que si vous utilisez un compte gmail, vous devez générer un mot de passe d'application)

`public string $SMTPPort = 587;` : port du serveur SMTP (587, 465)
