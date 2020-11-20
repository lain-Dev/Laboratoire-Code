<?php

$note = (int)readline('entrer votre note :'); //(int) converti en entier le nombre

if ($note >= 10) {
        echo "vous avez juste la moyenne !\n";
} elseif ($note === 10) {
    echo "Bravo vous avez la moyenne\n";
}else {
    echo "Dommage vous n:\'avez pas la moyenne\n";
}
    
$action = (int)readline('Entrer votre action : (1: attaquer, 2: défendre, 3: passe mon tour)');

//autre façon écrire :

switch ($action) {
    case 1:
        echo'j\'attaque';
    break;

    case 2:
        echo"je défends";
    break;

    case 3:
        echo'je ne fais rien';
    break;

    default:
    echo'commande inconnue';
}

//opérateur logique: "!" inverse une condition

$heure = (int)readline('entrer une heure: ');

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo 'le magasin sera ouvert !';
}else {
    echo 'le magasin est fermé !';
}