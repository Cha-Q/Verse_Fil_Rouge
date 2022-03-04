<?php


// Fonction que l'on va appeler dès lors que l'on souhaite éviter un injection XML

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}



?>