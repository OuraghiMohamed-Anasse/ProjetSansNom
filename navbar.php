<?php
    session_start();
    include "./DataBase/connexionbdd.php";
    
    ?>


        <nav class="topnav">
            <header>
                <a href="#" id="logo">SiteParDefaut</a>
                <ul>
                    <li><a href="#">Peinture</a></li>
                    <li><a href="#">Caligraphie</a></li>
                    <li><a href="#">Poesie</a></li>
                </ul>

                <div class="login">
                    <?php if (isset($_SESSION['username'])) :
                        $usr=$_SESSION['username']; ?>
                        <?php if(isset($_SESSION['profil'])){ ?>
                            <img id ="profilpic" src="./DataBase/Images/<?= $_SESSION["profil"]; ?>">
                        <?php } else { ?>
                            <img id ="profilpic" src="./DataBase/Images/pardefautimg.jpg">
                        <?php } ?>
                    <?php echo $_SESSION['username']?>
                        <a href="./deconnect.php">Deconnection</a>

                    <?php else: ?>
                    <a class="cta" href="./formulaire.php"><button class="colog">Inscription</button></a>
                    <a class="cta" href="./login.php"><button class="colog">Connexion</button></a>
                    <?php endif ?>

                </div>
            </header>
        </nav>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php

    echo $_SESSION['prenom'];

    ?>



