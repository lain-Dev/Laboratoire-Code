<?php

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

//exo:
/*
Demander a utilisateur de rentrer une note ou de taper "fin"
chaque note est sauvegardé dans un tableau $notes (pensez $notes[])
à la fin pour chaque note on affiche notes sous forme de liste: 
 

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
on demande utilisateurs les horaires ouvertures du magasin
on demande a utilisateur de rentrer une heure et on lui dira si le magasin est ouvert 
*/

$creneaux = []; //tableaux heures entrer

while (true) {
    $debut = (int)readline('Heure de début du créneaux : '); // rentre heure debut
    $fin  = (int)readline('heure de fermeture : '); // entre heure de fin
    if ($debut >= $fin) { // si heure debut sup ou egal heure fin alors pas bon
        echo "le créneaux n\'est pas bon ! (heure de début ($debut) est supérieur a heure de fermeture)";
    }else { //sinon 
        $creneaux[] = [$debut, $fin]; //on stock les heures données
        $action = readline('voulez vous enregistrer un nouveau créneau (o/n) : '); //on confirme qu'on arrête
        if ($action == 'n') { // si non est demander
            break; //on stop la boucle
        }
    }
}

$heure = (int)readline("A qu'elle heure voulez vous visiter le magasin ?"); //on demande heure de visite
$creneauTrouve = false; //heure de base faux

foreach($creneaux as $creneau) { //on parcours les horaires du tableau creanaux a intérieur 
    if($heure >= $crenau[0] && $heure <= $crenau[1]) { //si il y a 2 plage de crénaux on compare le premier sous tableau et le deuxieme sous tabelau
        $creaneauTrouver = true; //donc la variable passe true
        break; // on stop la recherche
    }
} 

//on demande au client heure qu'il veut visiter 
if ($creaneauTrouver) { //pas besoin de faire $creaneauTrouver === true (redondant !)
    echo 'le magasin sera ouvert !';
}else {
    echo 'désole le magasin fermé !';
}

print_r($creneaux);

//on affiche heure ouverture (autre possibilité)
echo 'le magasin est ouvert de  ';
foreach($creneaux as $k => $crenau){ //on va vérifie le deuxieme élément du tableau
    if ($k > 0) { //le deuxieme élément est [1] donc sup a 0
        echo 'et de' ; //donc on rajoute a la suite 'et de '
    }
    echo "{$crenau[0]}h à {$crenau[1]}h "; //on mets le crochet car le h coller, qui permets de balise la variable sinon la variablde devient: $craneauh !!
}