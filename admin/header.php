<?php 

include 'inc/init.inc.php'; 

?>



<!DOCTYPE html>

<html lang="fr">

  <head>


    <meta charset="utf-8">

      <!--[if IE]>

      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <![endif]-->

         <link rel="icon" type="image/png" href="favicon.png" />

<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

      <meta property="og:title" content="Shop 221 - Salon de tatouage" />

      <meta property="og:lang" content="fr" />

      <meta property="og:type" content="website" />


      <meta name="viewport" content="width=device-width,initial-scale=1.0">


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

      <!-- <link rel="stylesheet" type="text/css" href="vendor/normalize.min.css"> -->

            <link rel="stylesheet" type="text/css" href="<?= URL_SITE_BACK?>css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" href="<?= URL_SITE_BACK?>css/style.css">



      <!-- <link rel="stylesheet" type="text/css" href="css/stretch.css"> -->

      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">



      <!-- Google Analytics -->

  </head>

  <body>

    <nav id="nav">

      <a href="../index"><img src="img/logo-shop221.png" alt="Logo Shop 221"></a>   

      <ul>

        <li><a href="<?= URL_SITE_BACK;?>informations">Informations</a></li>

        <li><a href="<?= URL_SITE_BACK;?>artistes">Artistes</a></li>

        <li><a href="<?= URL_SITE_BACK;?>mot-de-passe-perdu">Changer de mot de passe</a></li>

        <li><a href="<?= URL_SITE_BACK;?>conventions">Conventions</a></li>

        <li><a href="<?= URL_SITE_BACK;?>connexion?action=deconnexion">Déconnexion</a></li>

      </ul>

    </nav>