<?php
// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');

// 2 : on fera ici nos opérations sur le fichier...

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>


<?php
// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');
 
// 2 : on lit la première ligne du fichier
$ligne = fgets($monfichier);
 
// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>
Pour lire, on a deux possibilités :

lire caractère par caractère avec la fonction fgetc ;

lire ligne par ligne avec fgets  .

//ecrire dans le fichier:
<?php fputs($monfichier, 'Texte à écrire'); ?>


<?php
$monfichier = fopen('compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>


En résumé
PHP permet d'enregistrer des informations dans des fichiers sur le serveur.

Il faut au préalable s'assurer que les fichiers autorisent PHP à les modifier. Pour cela, il faut changer les permissions du fichier (on parle de chmod) à l'aide d'un logiciel FTP comme FileZilla. Donnez la permission 777 au fichier pour permettre à PHP de travailler dessus.

La fonction fopen  permet d'ouvrir le fichier, fgets  de le lire ligne par ligne et fputs  d'y écrire une ligne.

À moins de stocker des données très simples, l'utilisation des fichiers n'est pas vraiment la technique la plus adaptée pour enregistrer des informations. Il est vivement recommandé de faire appel à une base de données.