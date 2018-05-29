<?php
$affichage['artiste']['nom'] = ""; 
if(isset($_GET['artiste']))
{
	$affichage['artiste']['nom'] .= $_GET['artiste']; 
}
$identifiantFacebook = ""; 
switch($_GET['artiste'])
{
	case 'yann' : 
	$identifiantFacebook = '3bda6dc3_1497254717'; 
	break; 
	
	case 'patrice' : 
	$identifiantFacebook = '94398235_1497254577'; 
	break; 	

}

include ('inc/header.php');
?>
            <link href="css/banniere.css" rel="stylesheet">
            <link rel="stylesheet" href="css/creations.css" type="text/css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        </head>

        <body>
		<?php include('inc/nav.php'); ?> 
            <section class="small bg">
                <h2>Yann</h2>
                <i>Réalisme noir & gris & couleur</i>            
            </section> 
            <section>
                <figure class="main-photo">
                    <img id="mainphoto" src="img/photo_yann.png" alt="">
                </figure>
                <article class="artistes">
                    <a href="creations_patrice.php"><img id="artiste" src="img/photo_patrice.png" alt=""></a>
                    <a href="creations_fanny.php"><img id="artiste" src="img/photo_fanny.png" alt=""></a>
                    <a href="creations_camille.php"><img id="artiste" src="img/photo_camille.png" alt=""></a>
                </article>
                <script src="//www.powr.io/powr.js" external-type="html"></script> 
                <div class="powr-facebook-feed" id="<?= $identifiantFacebook; ?>"></div>
            </section>
            <section class="buttons">
                <div class="container">
                    <a href="https://www.instagram.com/loedemenoir/" class="btn btn-2">En voir plus</a>
                </div>
            </section>                  
        
            <?php include ('inc/footer.php'); ?>
			</body>
    </html>
	<script>
	document.getElementById('editMe').value = "test"; 
	
	</script>