<?php
    //01-afficher une chaine charactère:
    echo ("Bonjour voici l'un des mes exercices !\n");

    //02-variable contenant un entier:
    $datenaissance = '15/04/1984';
    $nom = 'olivier';
    $prenom = 'lebon';

    //03-chaine de caractere faisant apparaître une variable:
    echo ("bonjour je m'appel $nom et je suis né le $datenaissance\n");

    //04-un texte selon condition vrai ou fausse:
    $age = (int)readline('entrer votre age: ');

    if ($age < 30) {
        echo 'tu es jeune';
    }elseif ($age >= 30) {
        echo 'tu te fais vieux';
    }elseif ($age < 18) {
        echo 'va voir ta mère';
    }
    