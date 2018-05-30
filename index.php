<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!--[if lt IE 8]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!--[if lt IE 7]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <meta property="og:title" content="Shop 221 - Salon de tatouage" />
      <meta property="og:lang" content="fr" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="http://www.shop221.fr" />
      <meta property="og:image" content="img/salon.jpg" />
      <meta property="og:site_name" content="Shop 221" />
      <meta property="og:description" content="Site web" />
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <meta name="description" content="Site web du salon de tatouage Shop 221">
      <meta name="author" content="Atom">
      <link rel="stylesheet" type="text/css" href="vendor/normalize.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/style.min.css"> -->
      <link rel="stylesheet" type="text/css" href="css/style.min.css">
      <link rel="stylesheet" type="text/css" href="css/burger.css">
      <link rel="stylesheet" type="text/css" href="css/footer_mobile.css">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
      <link rel="icon" href="favicon.ico" />
      <link rel="icon" type="image/png" href="favicon.png" />
      <title>Shop 221, salon de tatouage</title>
   </head>

   <body>
      <?php include 'admin/inc/init.inc.php';

      ?>
      <script type="text/javascript">

      // PLAY AND PAUSE BUTTON
         function vidplay() {
             var video = document.getElementById("bgvid");
             if (video.paused) {
                video.play();
               // button.textContent = "||";
             } else {
                video.pause();
             //   button.textContent = ">";
             }
          }


       function play() {
         // J'attrape la vidéo par son id que je stocke dans une variable
          var video = document.getElementById("bgvid");
             video.play();
       }

        function pause() {
           var video = document.getElementById("bgvid");
             video.pause();
          }


      </script>
      <header>
       <!-- BURGER MENU-->
         <div class="menu">
            <input id="menu--toggle"
            type="checkbox" />
            <!-- /#menu--toggle -->
            <label class="menu--toggle__trigger"
            for="menu--toggle"></label>
            <!-- /.menu--toggle__trigger -->
            <label class="menu--toggle__burger"
            for="menu--toggle"></label>
            <!-- /.menu--toggle__burger -->


         <ul class="menu__body">
            <li class="menu__body-element">
               <a class="menu__body-link"
               href="#salon">
               Le salon
               </a>
            <!-- /.menu__body-link -->
            </li>
            <!-- /.menu__body-element -->

            <li class="menu__body-element">
               <a class="menu__body-link"
               href="#artistes">
               Artistes & Créations
               </a>
            <!-- /.menu__body-link -->
            </li>
            <!-- /.menu__body-element -->

            <li class="menu__body-element">
               <a class="menu__body-link"
               href="#hygiene">
               Hygiène & Soin
               </a>
            <!-- /.menu__body-link -->
            </li>
            <!-- /.menu__body-element -->
            <li class="menu__body-element">
               <a class="menu__body-link"
               href="#contact">
               Contact
               </a>
            <!-- /.menu__body-link -->
            </li>
            <!-- /.menu__body-element -->
         </ul>
         <!-- /.menu__body -->
         </div>
         <!-- /.menu -->


         <nav class="main-nav" id="nav-menu">
            <a href="index.php"><img onclick="" src="img/logo.png" alt="Shop 221" />
            </a>
            <ul>
               <li><a href="#salon" class="active">Le salon</a>
               </li>
               <li><a href="#artistes">Artistes & Créations</a>
               </li>
               <li><a href="#hygiene">Hygiène & Soin</a>
               </li>
               <li><a href="#contact">Contact</a>
               </li>
            </ul>
         </nav>

         <span id="toTop"><img src="img/toTopScroll.png"></span>
      </header>
      
      <article class="video">
         <video autoplay loop id="bgvid" onclick="vidplay()" muted>
            <source class="bg" src="background.mp4" type="video/mp4">
         </video>
         <h1>
            SHOP221
         </h1>
         <a onclick="pause()" href="#salon" id="downArrow"><img src="img/down.png" class="scroll" alt="scroll">
         </a>
      </article>
      <div id="submenu"></div>
      <main role="main">
         <section>
            <article class="salon-presentation" id="salon">
               <h2>Le salon</h2>
               <figure>
                  <img src="img/salon.jpg" alt="salon shop 221" role="presentation">
                  <figcaption>
                     <h3>Shop221</h3>
                     <p>Shop 221 est un espace atypique dédié à l’art du tatouage fondé en 2010 par Jeykill et Veenom, tatoueurs et membres du collectif 9eme Concept. C’est au coeur des Abbesses qu’ils proposent une sélection d’oeuvres exclusives, des installations temporaires et la résidence d’artistes peintres ou tatoueurs.
                     </p>
                     <a href="#contact">contactez-nous</a>
                  </figcaption>
               </figure>
            </article>
            <article class="artistes" id="artistes">
               <h2>Artistes & Créations</h2>
               <section>
                  <div>
                     <figure>
                        <img src="img/camille.png" alt="salon shop 221" role="presentation">
                        <figcaption>
                           <h4>Camille, tatoueuse</h4>
                           <span>Noir & Blanc</span>
                           <p>Shop 221 est un espace atypique dédié à l’art du tatouage fondé en 2010 par Jeykill et Veenom, tatoueurs et membres du collectif 9eme Concept.
                           </p>
                           <a href="creations_camille.php" id="crea">Voir ses créations</a>
                           <a href="https://www.facebook.com/LoedemeNoir" target="_blank"><img src="img/facebook-blanc.png" alt="Facebook"></a>
                        </figcaption>
                     </figure>
                  </div>
                  <div>
                     <figure>
                        <img src="img/yann.png" alt="photo yann" role="presentation">
                        <figcaption>
                           <h4>Yann, tatoueur</h4>
                           <span>Réalisme noir & gris & couleur</span>
                           <p>Shop 221 est un espace atypique dédié à l’art du tatouage fondé en 2010 par Jeykill et Veenom, tatoueurs et membres du collectif 9eme Concept.
                           </p>
                           <a href="creations_yann.php" id="crea">Voir ses créations</a>
                        </figcaption>
                     </figure>
                  </div>
                  <div>
                     <figure>
                        <img src="img/patrice.png" alt="photo patrice" role="presentation">
                        <figcaption>
                           <h4>Patrice, tatoueur</h4>
                           <span>Ornemental & Aquarelle</span>
                           <p>Shop 221 est un espace atypique dédié à l’art du tatouage fondé en 2010 par Jeykill et Veenom, tatoueurs et membres du collectif 9eme Concept.
                           </p>
                           <a href="creations_patrice.php" id="crea">Voir ses créations</a>
                           <a href="https://www.facebook.com/patricetattoo/" target="_blank"><img alt="Facebook" src="img/facebook-blanc.png"></a>
                        </figcaption>
                     </figure>
                  </div>
                  <div>
                     <figure>
                        <img src="img/fanny.png" alt="photo fanny" role="presentation">
                        <figcaption>
                           <h4>Fanny, pierceuse</h4>
                           <span>Piercings</span>
                           <p>Shop 221 est un espace atypique dédié à l’art du tatouage fondé en 2010 par Jeykill et Veenom, tatoueurs et membres du collectif 9eme Concept.
                           </p>
                           <a href="creations_fanny.php" id="crea">Voir ses créations</a>
                           <a href="#"><img alt="Logo Instagram" src="img/instagram-logo.png"></a>
                        </figcaption>
                     </figure>
                  </div>
               </section>
            </article>
            <article class="hygiene" id="hygiene">
               <h2>Hygiène & Soin</h2>
               <nav class="nav-hygiene">
                  <ul class="menu-soin">
                     <li id="seance">Après la séance</li>
                     <li id="imperatif">Les impératifs</li>
                     <li id="jour">Pendant 15 jours</li>
                     <li id="mois">Pendant le mois de cicatrisation</li>
                  </ul>
               </nav>
               <figure class="seance show">
                  <img alt="Hygiene et soin seance" src="img/wash-hand.jpg" class="image-full">
                  <img alt="Hygiene et soin seance" src="img/wash.jpg" class="image-mobile">
                  <figcaption>
                     <b>Après la séance vous aurez un pansement qu'il faudra garder 1 heure, maximum 2 heures, à partir de là : </b>
                     <br>
                     <br>
                     <p>- Retirez le pansement</p>
                     </br>
                     <p>- Lavez le sous la douche tiède (pas chaude) avec un savon au PH neutre pour la peau ou savon d'hygiène intime, pour enlever tous les résidus (sang, encre, lymphe...)
                     </p>
                     <br>
                     <p> - Laissez le ensuite sécher à l'air libre, ou à l'aide d'un sopalin vous pouvez venir tapoter dessus (surtout ne pas frotter et n'utilisez pas de serviette de douche même propre) !</p>
                     <br>
                     <p>- Appliquez une crême spéciale tatouage ou de la bépanthène en fine couche sur votre tatouage. Pour la première nuit, refaite un pansement avec du filme alimentaire pour éviter de venir salir vos draps.</p>
                     <br>
                     <b>A partir du lendemain et pendant le mois de cicatrisation :</b>
                     <br>
                     <br>
                     <p>- Bien laver votre tatouage matin et soir, et appliquer de la crème spécial tattoo minimum 2 fois par jour (à chaque fois qu'il est sec)</p>
                  </figcaption>
               </figure>
               <figure class="imperatif">
                  <img alt="Hygiene et soin imperatif" src="img/imperatif.jpg">
                  <figcaption>
                     <b>Pendant la période de cicatrisation, il va falloir être attentif à l'hygiène des mains notamment.</b></br>
                     <b>-Les impératifs ! :</b>
                     <p>- Lavez-vous toujours les mains avec du savon avant de toucher votre tatouage.</p>
                     <br>
                     <p>-Ne grattez et n'arrachez jamais les croutes qui se forment</p>
                     <br>
                  </figcaption>
               </figure>
                <figure class="jour">
                   <img alt="Hygiene et soin periode cicatrisation" src="img/main.jpeg">
                   <figcaption>
                     <b>Pendant la période de cicatrisation, il va falloir être attentif à l'hygiène des mains notamment.</b></br>
                     <b>Pendant 15 jours :</b>
                     <p>- Piscine, sauna, mer -> INTERDIT</p>
                     <br>
                     <p> - Pas de sport avec de grosse sueur pendant minimum 48 heures (attention aux coups avec les sports de combat!)</p>
                   </figcaption>
                   </figure>

                   <figure class="mois">
                      <img alt="Hygiene et soin mois cicatrisation" src="img/mois-soin.jpg">
                      <figcaption>
                        <b>Pendant le mois de cicatrisation :</b></br>
                        <p>- Aucune exposition au soleil, les UV sont dangereux pour le tatouage. Même avec de la crème solaire, c'est INTERDIT !</p>
                        <br>
                        <p>- Passé ce délai, vous pourrez le protéger avec de l'écran solaire, de préférence pour enfants (indice 50) pour les premières expositions. </p>
                        <p>Vous devrez toute votre vie protéger votre tatouage du soleil, pour le garder éclatant</p>
                      </figcaption>
                   </figure>
            </article>
            <section id="contact" class="contact-section">
               <h2>Contact</h2>
               <div>
                  <article class="infos">
                     <h4 class="adresse">Shop 221</h4>
                     <p>
                        <img src="img/icon-home.png" alt="adresse">
                          <?php $reponse = $pdo->query('SELECT adresse_postale FROM user');

                            while ($donnees = $reponse->fetch())
                            {
                                echo $donnees['adresse_postale'];
                            }
                            
                            $reponse->closeCursor();
                            
                            ?>
                     </p>
                     <p>
                        <img src="img/icon-phone.png" alt="téléphone">
                         <?php $reponse = $pdo->query('SELECT num FROM user');

                            while ($donnees = $reponse->fetch())
                            {
                                echo $donnees['num'];
                            }
                            
                            $reponse->closeCursor();
                            
                            ?>
                     </p>
                     <p>
                        <img src="img/icon-mail.png" alt="mail"><a href="mailto:tropicaltattoopiercing@hotmail.com">
                        <?php $reponse = $pdo->query('SELECT email FROM user');

                            while ($donnees = $reponse->fetch())
                            {
                                echo $donnees['email'];
                            }
                            
                            $reponse->closeCursor();
                            
                            ?></a>
                     </p>
                     <h4 class="horaire">Horaires</h4>
                     <img src="img/icon-clock.png" alt="horaires">
                     <p>
                        Du lundi au samedi
                     <br> 12h – 19h tous les jours
                     <br> Sans interruption
                     <br> (Avec ou sans RDV)
                     </p>
                  </article>
                  <article class="form">
                     <form method="post" action="contact">
                        <input type="text" required id="nom" name="nom" placeholder="Nom">
                        <br>
                        <input type="email" required name="email" id="email" placeholder="Email">
                        <label>Message</label>
                        <textarea id="message" name="message" cols="30" rows="10"></textarea>
                        <input name="envoi" type="submit" value="Envoyer" />
                     </form>
                  </article>
               </div>
            </section>
            <section>
            <div class="overlay" onclick="style.pointerEvents='none'"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.0979438093823!2d2.329284616031663!3d48.64624147926727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5d923413c90c9%3A0x9a522d64850ea71f!2s221+Avenue+Gabriel+P%C3%A9ri%2C+91700+Sainte-Genevi%C3%A8ve-des-Bois!5e0!3m2!1sfr!2sfr!4v1497472753047" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
         </section>
      </main>
      
      <?php include('inc/footer.php') ; ?>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/app.js"></script>
   </body>
</html>
