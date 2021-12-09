<?php
    function valid_password($mdp){
        $uppercase = preg_match('@[A-Z]@', $mdp);
        $lowercase = preg_match('@[a-z]@', $mdp);
        $number    = preg_match('@[0-9]@', $mdp);

        if(!$uppercase || !$lowercase || !$number || strlen($mdp) < 8) {
            return false;
        }
        else{
            return true;
        }
    }
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}



