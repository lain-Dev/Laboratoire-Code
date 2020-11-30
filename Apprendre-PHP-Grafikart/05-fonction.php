<?php
/*
//test fonction qui vérifie quand le mot est inversé est le même:
$mot = readline('entrer votre mot ');
$inversMot = strrev($mot);

if (strtolower($mot) == strtolower($inversMot)) { //on vertie en miniscule toute les valeur pour la corrs
    echo 'le mot inerser correspond !';
}else {
    echo 'le mot inverser ne correspond pas !';
}
*/

//faire la moyenne d'un tableau par des fonctions:
$notes = [10, 13, 20];
//ajouter élément dans tableau:
array_push($notes, 10,15);
//on fait la somme des données:
$sommes = array_sum($notes);
//notre éléments dans un tableau:
$nombre = count($notes);
//afficher la moyenne: arrondir 2 chiffre apres la virgule 
echo "vous avez " . round(($sommes / $nombre), 2) . " de moyenne !";

