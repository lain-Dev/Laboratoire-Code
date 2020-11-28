<?php

    // afficher entier 1 à 10 avdc boucle while:
    /*$i = 0;
    while (true) {
        if ($i <= 10) {
            $i++;
        }else {
        break;
        }
    }*/

    //idem boucle for:
    /*for ($j = 0; $j <=10; $j++) {
        echo"-valeur de j: $j\n";
    }*/

    //placer cette boucle dans un procédure et faire appel: 
    /*function comptNumber () {
        for ($j = 0; $j <=10; $j++) {
            echo"-valeur de j: $j\n";
        }
    }
    comptNumber();*/

    //Modifier la procédure pour pouvoir compter de 1 à un entier quelconque:
    $number = (int)readline("entre un nombre: ");

    for ($i = 0; $i <= $number; $i++) {
        echo "-$i\n";
    }