<?php

$prenom = 'olivier';
$nom = 'lebon';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) / 2;

echo 'bonjour ' . $prenom . ' ' . $nom  . 'vous avez eu' . (($note1 + $note2) / 2) . ' de moyenne';

echo "\nbonjour $prenom $nom vous avez eu $moyenne de moyenne";

?>
