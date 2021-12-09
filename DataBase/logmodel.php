<?php
include "./fonctions.php";
require './connexionbdd.php';
$photo = $_FILES['profil']['name'];



if(!empty($_POST)) {
    $errors = array();

    if (empty($_POST['username'])) {
        echo "<script>alert(\"Veuillez entrer votre nom d'utilisateur\")</script>";
    } else if (empty($_POST['prenom'])) {
        echo "<script>alert(\"Veuillez entrer votre prenom\")</script>";
    } else if (empty($_POST['nom'])) {
        echo "<script>alert(\"Veuillez entrer votre nom\")</script>";
    } else if (empty($_POST['email'])) {
        echo "<script>alert(\"Veuillez entrer votre mail\")</script>";
    } else if (empty($_POST["mot_de_passe"]) || valid_password($_POST["mot_de_passe"]) == false || $_POST["mot_de_passe"] != $_POST["confirm_pass"]) {
        echo "<script>alert(\"Veuillez entrer un bon  mot de passe(doit contenir au moins une majuscule une minuscule et un chiffre et etre identique au message a confiermer\")</script>";

        // Check if the account with that username already exists
        $stmt = $pdo->prepare('SELECT id, mot_de_passe FROM users WHERE username = ? OR email = ?');
        $stmt->execute([$_POST['username'], $_POST['email']]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
// Store the result so we can check if the account exists in the database.
        if ($account) {
            // Username already exists
            echo "<script>alert(\"Mail ou utilisateur existant\")</script>";
        }

        } else {
        $username = valid_donnees($_POST['username']);
        $nom = valid_donnees($_POST['nom']);
        $prenom = valid_donnees($_POST['prenom']);


        if(move_uploaded_file($_FILES['profil']['tmp_name'],__DIR__.'/Images/'.$photo)) {
            $req = $pdo->prepare("INSERT INTO users SET username = ? , prenom = ? , nom = ? , email = ? ,mot_de_passe = ? , profil = ? ,  date_inscription = NOW()");
            $password = password_hash($_POST["mot_de_passe"], PASSWORD_BCRYPT);
            $req->execute([$username, $prenom, $nom, $_POST['email'], $password , $_FILES['profil']='./Images/'.$photo ]);

            exit();
        }
    }
    if (isset($errors)) {
        $_SESSION['erreur'] = $errors;
        echo $errors;
    }
}



?>