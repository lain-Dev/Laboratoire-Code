<?php

$eleve = [
    'nom' => 'olivier',
    'prenom' => 'lebon',
    'note' => [10, 20, 9, 15]
];

echo $eleve['nom'] . ' ' . $eleve['prenom'];

//modifié valeurs dans tableau
$eleve['nom'] = 'jean';
echo $eleve['nom'];