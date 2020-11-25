<?php
/*
$chiffre = null;

//boucle tant que :
while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrer une valeur: ');
}
echo 'Bravo vous avez gagné !';

//boucle for: 
for ($i = 0; $i < 10; $i++) { // si incrémenter de 2 faut mettre $i += 2
    echo "- $i \n";
}

//boucle pour chaque (pour tableau !)
$notes = [10, 15, 20, 16];

foreach ($notes as $note) { //se lit pour chaque note dans la variable notes
    echo "- $note \n";
}

$eleves = [
    'cm2' => 'jean',
    'cm1' => 'marc'
];

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe \n";
};



//quand il y a une liste dans tableau:
$eleves2 = [
    'cm1' => ['jean', 'olivier', 'hugo'],
    'cm2' => ['louis', 'tom', 'david']
];

foreach ($eleves2 as $classe => $listEleve) {
    echo "la classe $classe: \n";
    foreach ($listEleve as $eleve) {
        echo "- $eleve \n";
    }
};
*/
//exo:
/*
Demander a utilisateur de rentrer une note ou de taper "fin"
chaque note est sauvegardé dans un tableau $notes (pensez $notes[])
à la fin pour chaque note on affiche notes sous forme de liste: 
 
*/
$notes = [];


//tant utilisateur ne tape pas "fin"
while (true) {
    $action = readline('Entrer une note (ou fin pour terminer):');
    //on ajoute la note dans tableau notes
    if ($action === 'fin') {
        break;
    }else {
        $notes[] = (int)$action;
    }
}

//pour 
foreach ($notes as $note) {
    echo "- $note \n";
}


//Exo2:
/*

*/