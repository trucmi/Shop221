 <footer role="contentinfo">

    <ul  id="lien">

      <li id="copyright" style="color:#fff;">© SHOP 221 | Tous droits réservés |

        <?php echo date( 'Y');?> </li>

      <li><a id="Conv" href="conventions.php">Conventions & Partenariats</a>

      </li>

      <li><a id="Mentions" href="mentions-legales.php">Mentions légales</a>

      </li>

      <li><a id="faq" href="faq.php">FAQ</a>

      </li>

    </ul>

    <ul class="social">

        <li>

          <a target="_blank" class="facebook" href="<?php $reponse = $pdo->query('SELECT lien_facebook FROM user');

                            while ($donnees = $reponse->fetch())
                            {
                                echo $donnees['lien_facebook'];
                            }
                            
                            $reponse->closeCursor();
                            
                            ?>"></a>

        </li>

        <li>

          <a target="_blank" class="instagram" href="<?php $reponse = $pdo->query('SELECT lien_instagram FROM user');

                            while ($donnees = $reponse->fetch())
                            {
                                echo $donnees['lien_instagram'];
                            }
                            
                            $reponse->closeCursor();
                            
                            ?>"></a>

        </li>

      </ul>

  </footer>

