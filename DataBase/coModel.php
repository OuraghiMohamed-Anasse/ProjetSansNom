<?php

require './connexionbdd.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['mot_de_passe'])) {
        echo"<script>alert(\"Veuillez remplir tous les champs\")</script>";
    } else {
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $statement = $pdo->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST['username']
            )
        );
        $count = $statement->rowCount();
        if ($count > 0) {

            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if (password_verify($_POST['mot_de_passe'], $result['mot_de_passe'])) {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['profil'] = $profilpic ;
                exit(header('location: ../index.php'));
            } else {
                header('location: ../login.php');

            }
        } else {
            echo "<script>alert(\"ERREUR\")</script>";
        }
    }
}

