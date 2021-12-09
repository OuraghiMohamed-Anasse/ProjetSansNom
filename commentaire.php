<?php
session_start();
if(!isset($_SESSION['username'])){
    
    header("location: ./index.php");
    echo "<script>alert(\"Veuillez entrer votre nom d'utilisateur\")</script>";
}

if(!empty($_POST)){
    $errors = array();

  if(empty($_POST['commentaire'])){
      $errors['commentaire'] = "T'es tellement bourré que t'as rien écris ahaha !";
  }
  if(empty($errors)){
    require './DataBase/connexionbdd.php';
    $username = $_SESSION['username'];
    $req2 = $pdo->prepare('SELECT id FROM users WHERE username ="'.$username.'"');
    $req2->execute();
    $res = $req2->fetch();
    $idinscrit = $res;
    $req = $pdo->prepare('INSERT INTO message SET idinscrit = '.$idinscrit->id.',commentaire = ?, dateajout = NOW()');
    $req->execute([$_POST['commentaire']]);
    header("location: ./index.php");
  }
else{
    $errors['mess'] = "T'es tellement bourré que t'as rien écris ahaha !";

}}