<?php
    session_start();
    $page = "Inscription";
    include "./header.php";
    include "./navbar.php";
    ?>


<div class="login-page"  >
    <div class="form">
        <legend> 👋Welcome</legend>
        <form class="register-form" action="./DataBase/logmodel.php"  method="POST" enctype="multipart/form-data">
            <label for="username">Nom d'Utilisateur</label>
            <input type="text" name="username" id="pseudo" >

            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" >

            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" >

            <label for="email">Email</label>
            <input type="email" name="email" id="email" >

            <label for="profil">Photo de Profil</label>
            <input type="file" id="profil" name="profil" accept="image/png, image/jpeg">

            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" name="mot_de_passe" id="user_pass" >

            <label for="confirm_pass">Confirmez le Mot de Passe</label>
            <input type="password" name="confirm_pass" id="confpass">

            <button>Inscription</button>
            <p class="message">Deja inscrit ? <a href="#">Connectez-vous</a></p>
        </form>
    </div>
</div>
