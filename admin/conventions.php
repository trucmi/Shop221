      <title>Conventions</title>

<?php include('header.php'); ?>


<script type="text/javascript">
function getfile(){
    document.getElementById('hiddenfile').click();
    document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value
}
</script>




       <section class="small bg">
            <h2>Conventions</h2>
                      
      </section>
           <!--   <section>
                <img src="img/background.jpg" alt="" width="100%">
                <h2>Camille</h2>
                <i>Le noir blanc</i>
            </section>-->
  <div class="row">
      <div class="col-md-5">
      <div class="text-center cercle">
        <img src="img/carre.png">
        <img src="img/carre.png">
        <img src="img/carre.png">
        </div>
        <br>
        <div class="text-center delete">
        <img src="img/delete.png">
        <img src="img/delete.png">
        <img src="img/delete.png">
        </div>
        </div>

      <div class="col-md-1 col-sm-offset-1">
       <img id="bordure" src="img/bordure.png">
       </div>
    <div class="col-md-5">
    <form method="post" action="" class="col-md-8 col-sm-offset-1">
    <h3 style="color:#9c2129;" >Ajouter une convention</h3>
      <div class="form-group">
        <label for="inputPseudo">Date & Lieu</label>
        <input type="text" class="form-control" id="inputPseudo" autofocus name="pseudo">
      </div>
      <div class="form-group">
        <label for="inputMdp">Site internet</label>
        <input type="url" class="form-control" id="inputMdp" name="mdp">
      </div>
       <div class="form-group">
        <label for="file" class="label-file">Photo</label>
        <input type="file" id="hiddenfile" style="display:none">
        <input type="text" class="form-control" id="selectedfile" onclick="getfile()" placeholder="Choisissez un fichier...">
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