<?php
    session_start();
    include "./DataBase/connexionbdd.php";
    include "./header.php";
    include "./navbar.php";
?>


<section class="profil">
      <div class="main-content">
        <h1>Exrpimer votre créativitée</h1>

        <div class="slideshow-container">
          <div class="slideshow">
            <div class="slide s1">
              <div class="overlay"></div>
              <h2>Caligraphie</h2>
              <a>Arabe</a>
            </div>
            <div class="slide s2">
              <div class="overlay"></div>
              <h2>Caligraphie</h2>
              <a>Japonaise</a>
            </div>
            <div class="slide s3">
              <div class="overlay"></div>
              <h2>Caligraphie</h2>
              <a>Coreene</a>
            </div>
            <div class="slide s4">
              <div class="overlay"></div>
              <h2>Peinture</h2>
              <a>Jojo</a>
            </div>
            <div class="slide s5">
              <div class="overlay"></div>
              <h2>Peinture</h2>
              <a>Jojo</a>
            </div>
            <div class="slide s6">
              <div class="overlay"></div>
              <h2>Peinture</h2>
              <a>Vagabond</a>
            </div>
            <div class="slide s7">
              <div class="overlay"></div>
              <h2>Peinture</h2>
              <a>Kimetsu no yaiba</a>
            </div>
          </div>
        </div>
      </div>


      <section id="espacecomm">
        <h3 data-aos="fade-out">Espaces commentaires</h3>
        <div class="commentaires" data-aos="zoom-in-left">
            <h4>Voici les derniers commentaires des utilisateurs</h4>
            <?php
    require './DataBase/connexionbdd.php';
    $req = $pdo->prepare("SELECT users.username, message.commentaire, message.dateajout
    FROM users 
    JOIN message 
    ON users.id = message.idinscrit");
    $req->execute();

    $resultat = $req->fetchAll();
    foreach($resultat as $value){

        echo "<div class='commcontent'>
        <p  id='pseudo'>Posté par $value->username</p>
        <p id='date'>le $value->dateajout</p>
        <p id='comm'>$value->commentaire</p>
    </div>";
    }
    ?>

        </div>
        <div class="post" data-aos="zoom-in-right">
            <form id="msform" action="./commentaire.php" method="POST">
                <fieldset>
                    <h2 class="fs-title">Poste ton commentaire</h2>
                    <textarea name="commentaire"></textarea>
                    <input type="submit" name="next" class="next action-button" value="Envoyer" />
                </fieldset>
            </form>
        </div>
    </section>


<h1>Peinture</h1>

      <script src="./script.js"></script>