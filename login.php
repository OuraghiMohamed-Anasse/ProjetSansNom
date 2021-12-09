<?php
    $page = "Connexion";
    include "./header.php";
    include "./navbar.php"
?>
<div class="login-page">
    <div class="form">
<form class="login-form" action="./DataBase/coModel.php"  method="POST" enctype="multipart/form-data">
    <label for="username">Nom d'Utilisateur</label>
    <input type="text" name="username" id="username">

    <label for="mot_de_passe">Mot de Passe</label>
    <input type="password" name="mot_de_passe" >

    <button type="submit" name="submit">Conexion</button>
    <p class="message">Pas inscrit ? <a href="#">Creez un compte</a></p>
</form>
</div>