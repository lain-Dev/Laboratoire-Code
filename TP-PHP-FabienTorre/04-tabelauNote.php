<?php
//afficher les les éléments d'un tableau:
$notes = [10, 11, 12, 13, 14];
print_r($notes);

//calculer la moyenne des notes dans tabelau:
$somme = array_sum($notes);
echo "la somme du tableau est de : $somme\n";
$nombre = count($notes);
echo "nombre éléments : $nombre\n";
$moyenne = round(($somme / $nombre), 2);
echo "la moyenne est de : $moyenne\n";

//indique combien d'éléments sont supérieurs ou égaux à 10:
foreach ($notes as $note) {
    if ($note >= 10) {
        echo "-note sont: $note\n";
    }
}

//teste si la note 20 est présente ou non:
$superbeNote = 20;
if ($superbeNote = array_search(20, $notes)) {
    echo "il y a une note sur 20\n";
}else {
    echo "il n'a pas de note sur 20\n";
}

//détermine la meilleure note obtenue
echo 'la meilleur note est ' . max($notes);


