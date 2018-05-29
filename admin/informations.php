 <title>Informations</title>



<?php include('header.php');



//si un visiteur n'est pas connecté, il ne peut pas accéder à la page profil. Du coup, il est redirigé vers la page connexion.php

if(!membreEstconnecte())

{

	header('location:'. URL_SITE_BACK .'connexion');

	exit();

}



//affichage modif profil !

if(isset($_GET['modification']) AND $_GET['modification'] == 'true')

{

	$content .= "<div class='alert alert-success'>Votre informations ont bien été modifiées.</div>";

}



$erreur = "";

$adresse 		= 	$_SESSION['membre']['adresse_postale'];

$telephone 		= 	$_SESSION['membre']['num'];

$lien_instagram = 	$_SESSION['membre']['lien_instagram'];

$mail 			= 	$_SESSION['membre']['email'];

$lien_facebook 	= 	$_SESSION['membre']['lien_facebook'];

//si l'utilisateur clique sur Enregistrement :

if(isset($_POST['envoyer']))//AND $_POST['envoyer'] == "Enregistrer")

{
	//header('location:'. URL_SITE_BACK .'informations.php?modification=true');
echo "JE SUIS LA\n";
$adresse 		= 	(isset($_POST['adresse'])) ? $_POST['adresse'] : null;

$telephone 		= 	(isset($_POST['telephone'])) ? $_POST['telephone'] : null;

$lien_instagram = 	(isset($_POST['lien_insta'])) ? $_POST['lien_insta'] : null;

$mail 			= 	(isset($_POST['email'])) ? $_POST['email'] : null;

$lien_facebook 	= 	(isset($_POST['lien_fb'])) ? $_POST['lien_fb'] : null;

echo "$adresse\n";
echo "$telephone\n";
echo "$lien_instagram\n";
echo "$mail\n";
echo "$lien_facebook\n";

	//j'emploie mes fonctions pour vérifier l'ensemble des champs :





    verifChamp($adresse,'#^[a-zàâéêèûüïôA-Z0-9\' -]{10,150}+$#','Adresse','[a-zàâéêèûüïôA-Z0-9\' -] (De 10 à 150 caractères)');
    verifNum($telephone,10,'');

	verifChamp($lien_instagram,'#^[a-zàâéêèûüïôA-Z\' -]{2,20}+$#','lien instagram','[a-zàâéêèûüïôA-Z\' -] (De 2 à 20 caractères)');



	verifChamp($lien_facebook,'#^[a-zàâéêèûüïôA-Z\' -]+$#','Lien facebook','[a-zàâéêèûüïôA-Z\' -] ');







    	//vérification champ email :

	if(!filter_var($mail, FILTER_VALIDATE_EMAIL))

	{

		$erreur .= '<div class="alert alert-danger">Le format de l\'email est incorrect !</div>';

	}

$valueR = empty($erreur);
echo $valueR ? 'true' : 'false';
	if(empty($erreur) == false) //si $erreur est vide, c'est qu'il n'y a aucune erreur on va donc faire un update des données du formulaire !

	{
		$requeteUpdate = $pdo->prepare('UPDATE user SET

					adresse_postale	=	:adresse,

					num		=	:telephone,

					lien_instagram	=	:lien_instagram,

					email			=	:mail,

					lien_facebook	=	:lien_facebook

                  where id_user = 1');


		//on utilise un système de référence : plus rapide et plus sécurisé cf. prepare()



		/*

			la méthode bindValue() attend trois arguments :

				1 - la référence

				2 - la saisie de l'utilisateur

				3 - la constante PDO afin de 'typer' la saisie



				PARAM_STR => string

				PARAM_INT => integer

		*/

		$requeteUpdate	->	bindValue(':adresse',$adresse,PDO::PARAM_STR);

		$requeteUpdate	->	bindValue(':telephone',$telephone,PDO::PARAM_STR);

		$requeteUpdate	->	bindValue(':lien_instagram',$lien_instagram,PDO::PARAM_STR);

		$requeteUpdate	->	bindValue(':mail',$mail,PDO::PARAM_STR);

		$requeteUpdate	->	bindValue(':lien_facebook',$lien_facebook,PDO::PARAM_STR);

		//exécution de la requête modification :

		$requeteUpdate->execute();

		$_SESSION['membre']['adresse_postale'] = $adresse;

		$_SESSION['membre']['num'] = $telephone;

		$_SESSION['membre']['lien_instagram'] = $lien_instagram;

		$_SESSION['membre']['email'] = $mail;

		$_SESSION['membre']['lien_facebook'] = $lien_facebook;

		foreach($_POST as $indices => $valeurs)

		{

			//j'update le contenu de ma session :

			$_SESSION['membre'][$indices] = $valeurs;

		}

		unset($_POST); //on vide le contenu de $_POST



		header('location:'. URL_SITE_BACK .'informations?modification=true');

	}

	else

	{

		$content .= $erreur;

	}

}

?>





       <section class="small bg">

            <h2>Informations</h2>



      </section>
    <div class="col-md-5 col-sm-offset-1">

    <form method="post" action="">
      <p><?= $content;?></p>

          <div class="form-group">

        <label for="adresseInput">Changer l'adresse postale dans "Contact"</label>

        <input type="text" class="form-control" id="adresseInput" autofocus name="adresse" value="<?= $adresse;?>">

      </div>

    <!--</form>-->



      <!--<form method="post" action="">-->

      <div class="form-group">

        <label for="inputTel">Changer numéro de téléphone dans "Contact"</label>

        <input type="tel" class="form-control" id="inputTel" name="telephone" value="<?= $telephone;?>" >

      </div>



    <!--</form>
      <form method="post" action="">-->

      <div class="form-group">

        <label for="inputInsta">Lien Instagram</label>

        <input type="url" class="form-control" id="inputInsta" name="lien_insta" value="<?= $lien_instagram;?>">

      </div>

      <!--</form>

      <form method="post" action="">-->




  </div>

   <div class="col-md-5 col-sm-offset-1">

    <div class="col-md-10">

  <!--  <form method="post" action="">-->

          <div class="form-group">

        <label for="inputContact">Changer l'adresse email dans "Contact"</label>

        <input type="email" class="form-control" id="inputContact" name="email" value="<?= $mail;?>">

    <!--  </form>-->


<!--        </form>

        <form method="post" action="">-->

      <div class="form-group">

        <label for="inputFB">Lien Facebook</label>

        <input type="url" class="form-control" id="inputFB" name="lien_fb" value="<?= $lien_facebook;?>">

      </div>


  <!--  -->            <div class="form-group">

        <input type="submit" class="btn btn-primary " style="background:#9c2129;border:none;" value="Enregistrer" name="envoyer">

      </div>

    	</div>
		</form>
  </div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
