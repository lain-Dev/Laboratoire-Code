<?php

$eleve = [
    'nom' => 'olivier',
    'prenom' => 'lebon',
    'note' => [10, 20, 9, 15]
];
echo 'affiche nom et prenom : ';
echo $eleve['nom'] . ' ' . $eleve['prenom'];

//modifié valeurs dans tableau

$eleve['nom'] = 'jean';
echo "\naffiche nom modifier : "; //guillement double pour sauter la ligne \n
echo $eleve['nom'];

//ajouter une valeur dans le tableau a la suite, si dans un emplacement précis mettre la position dans paranthèse vide !!
$eleve['note'][] = 15;

//afficher ce qu'il y a dans une variable
echo "\nvaleur rajouter dans tableau : ";
print_r($eleve['note']);

//rajoute une clé dans la variable, mais a partir de index0 les éléments déjà créer ne sont pas indexer
$eleve[] = 'CM-2';
echo "\nnouvelle clé ajouté : \n";
print_r($eleve);

// tableau dans un tableau :
$classe = [
    //premier élève
    [
        'nom' => 'olivier',
        'prenom' => 'lebon',
        'notes' => [15, 15, 15]
    ],
    //deuxieme élève
    [
        'nom' => 'jean',
        'prenom' => 'doe',
        'note' => [15, 14, 15]
    ]
];
echo "\nLa deuxième Note du second élève est : ";
echo $classe[1]['note'][1];

?>