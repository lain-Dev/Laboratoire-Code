<?php
//outefois, avec cet exemple, on ne récupère que la valeur. Or, on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrire foreach  comme ceci :

    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 Rue du Paradis',
        'ville' => 'Marseille');
    
    foreach($coordonnees as $cle => $element)
    {
        echo '[' . $cle . '] vaut ' . $element . '<br />';
    }

/*
$cle  , qui contiendra la clé de l'élément en cours d'analyse (« prenom », « nom », etc.) ;

$element  , qui contiendra la valeur de l'élément en cours (« François », « Dupont », etc.).
*/