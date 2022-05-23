<?php


// Fonction que l'on va appeler pour se protéger des injections XML

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}



?>