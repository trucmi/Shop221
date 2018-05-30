      <title>Mot de passe perdu</title>

<?php include('header.php'); 
include 'inc/init.inc.php';

$username = $_POST['pseudo'];
        $mdp = $_POST['mdp'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT mdp FROM user WHERE 
user_id='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($mdp!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword == $confirmnewpassword)
        $sql=mysql_query("UPDATE user SET mdp='$newpassword' where 

 user_id='$username'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>




?>



       <section class="small bg">
            <h2>Mot de passe</h2>
                      
      </section>

    <div class="col-md-4 col-sm-offset-1">
    <form method="post" action="">
    <h3 style="color:#9c2129;" >Changer le mot de passe de votre compte admin</h3>
      <div class="form-group">
        <label for="inputPseudo">Mot de passe actuel</label>
        <input type="password" class="form-control" id="inputPseudo" autofocus name="pseudo">
      </div>
      <div class="form-group">
        <label for="inputPseudo">Nouveau mot de passe</label>
        <input type="password" class="form-control" id="inputPseudo" name="pseudo">
      </div>
      <div class="form-group">
        <label for="inputPseudo">Confirmer nouveau mot de passe</label>
        <input type="password" class="form-control" id="inputPseudo" name="pseudo">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary " style="background:#9c2129;border:none;" value="Ajouter" name="envoyer">
      </div>
    </form>
    </div>
  </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>