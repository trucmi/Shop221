  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">





<?php 

include 'inc/init.inc.php';



if(isset($_GET['deconnexion']) AND $_GET['deconnexion'] == 'true')

{

  $content .= '<div class="alert alert-success">Vous êtes déconnecté(e)</div>';   

}



//si l'utilisateur clique sur 'se déconnecter', je récupère les infos stockées dans l'url, je détruis la session et je redirige l'utilisateur vers la page index

if(isset($_GET['action']) AND($_GET['action']=='deconnexion'))

{

  session_destroy(); 

  header('location:'. URL_SITE_BACK .'connexion?deconnexion=true'); 

  exit(); 

}



//si un membre est connecté, il ne peut pas accéder à la page connexion. Du coup, il est redirigé vers la page information

if(membreEstconnecte())

{

  header('location:'. URL_SITE_BACK .'informations'); 

  exit(); 

}





$erreur = ""; 

if(isset($_POST['envoyer']) && $_POST['envoyer'] == "Se connecter")

{

  //les champs pseudo et mdp doivent obligatoirement être remplis

  if(empty($_POST['pseudo']) || empty($_POST['mdp']))

  {

    $erreur .= '<div class="alert alert-danger">Tous les champs doivent être remplis</div>'; 

  }

  else

  {

    //je stocke ma requête :

    $recupDonnees = $pdo->query('SELECT * FROM user WHERE pseudo="' . $_POST['pseudo'] . '"'); 

    //s'il y a au minimum un résultat correspondant en bdd : 

    //rowCount() = méthode qui me permet de retourner le nombre de rangées en bdd. Si la valeur est égale à 0 => résultat vide !

    if($recupDonnees->rowCount() != 0)

    {

      //récupération sous forme exploitable en utilisant la méthode fetch() : 

      $membre = $recupDonnees->fetch(); 

      // debug($membre); 



      //vérif mdp : 

      /*

      on utilise password_verify() pour vérifier si le mot de passe crypté en base correspond à la saisie de l'utilisateur 

      */

      if(password_verify($_POST['mdp'],$membre['mdp']))

      {

        //récupération des données et on les stocke dans une session

        // debug($membre); 

        /*

        ucfirst() : 1ere lettre en capitale

        strtolower() : chaine de caractères en minusc.

        */

        $_SESSION['membre']['id_user']          = $membre['id_user'];

        $_SESSION['membre']['pseudo']           = $membre['pseudo'];

        $_SESSION['membre']['email']            = $membre['email'];

        $_SESSION['membre']['adresse_postale']          = $membre['adresse_postale'];

        $_SESSION['membre']['num']        = $membre['num'];

        $_SESSION['membre']['lien_instagram']   = $membre['lien_instagram'];

        $_SESSION['membre']['lien_facebook']    = $membre['lien_facebook'];



        

        //redirection vers la page profil : 

        header('location:' . URL_SITE_BACK . 'informations'); 

      }

      else

      {

        $erreur .= '<div class="alert alert-danger">Erreur de mot de passe</div>';

      } 

    }

    else //si le pseudo n'existe pas...

    {

      $erreur .= '<div class="alert alert-danger">Votre pseudo n\'existe pas !</div>';      

    }

  }

  $content .= $erreur; 

}





?>

<!DOCTYPE html>

<html lang="fr">

<head>

  <title>Connexion</title>  

  



   <h2 class="text-center"><a href="../index"><img src="img/logo-shop221.png" ></a></h2>

    

    <form method="post" action="" class="col-sm-4 col-sm-offset-4">

    <?= $content;?>

      <div class="form-group">

        <label for="inputPseudo">Pseudo / Email</label>

        <input type="text" class="form-control" id="inputPseudo" autofocus name="pseudo">

      </div>

      <div class="form-group">

        <label for="inputMdp">Mot de passe</label>

        <input type="password" class="form-control" id="inputMdp" name="mdp">

      </div>  

      <div class="form-group">

        <input type="submit" class="btn btn-primary " style="background:#9c2129;border:none;" value="Se connecter" name="envoyer">

      </div>

    </form> 

  </div>

