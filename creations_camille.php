    <link rel="stylesheet" href="css/creations.css" type="text/css">
    <meta name="viewport" content="width=device-width; initial-scale-1.0; maximum-scale=1.0">
	<link rel="stylesheet" href="css/tablette_creations.css" media="(min-width:481px) and (max-width:770px)">
	<link rel="stylesheet" href="css/smartphone_creations.css" media="(min-width:0px) and (max-width:480px)">
    <?php include('inc/header.php'); ?>
    <title>Artiste | Camille</title>
    <link rel="stylesheet" type="text/css" href="vendor/normalize.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body id="PagePatrice">
        <?php include 'admin/inc/init.inc.php';?>
        <?php include('inc/nav.php'); ?>
        <section class="small bg">
            <h2>Camille</h2>
            <i>Noir & Blanc</i>            
        </section>
        <section>
            <figure class="main-photo">
                <img id="mainphoto" src="img/photo_camille_main.png" alt="">
            </figure>
            <ul class="artistes">
                <a href="creations_yann.php"><li id="yann"></li></a>
                <a href="creations_patrice.php"><li id="patrice"></li></a>
                <a href="creations_fanny.php"><li id="fanny"></li></a>
            </ul>
            <div class="powr-facebook-feed" id="fede6c61_1496756979"></div>
        </section>
        <section class="buttons">
            <div class="container">
                <a target="_blank" href="https://www.facebook.com/LoedemeNoir/" class="btn btn-2">En voir plus</a>
            </div>
        </section>
        <?php include('inc/footer.php'); ?>
        <script src="//www.powr.io/powr.js" external-type="html"></script>
    </body>
</html>
