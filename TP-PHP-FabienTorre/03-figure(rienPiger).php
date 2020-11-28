<?php
//Écrire une boucle qui produit une ligne horizontale de 8 étoiles
 /* on dit bonjour et on passe à la ligne*/
 echo "bonjour le monde\n";

 /* on compte jusqu'à 100*/

 for ($i=1 ; $i<=100 ; $i++) { /* boucle de 1 à 100 */
     echo "$i\n"; /* affiche de $i et passage à la ligne */
 }    
 echo "\n";

 /* différence entre guillemet et apostropĥe */
 echo "sortie de la boucle, voici la valeur de i : $i\n";
 echo 'sortie de la boucle, voici la valeur de i : $i\n';
 echo "\n";

     /* une ligne d'étoiles et passage à la ligne */
     for ($i=1 ; $i<=10 ; $i++) {
              echo '*';
 }
 echo "\n";

 /* un carré de 10 lignes */
 for ($j=1 ; $j<=10 ; $j++) {
     /* une ligne d'étoiles et passage à la ligne */
     for ($i=1 ; $i<=10 ; $i++) {
         echo '*';
     }
     echo "\n";
 }

 /* une table de multiplication de 10 lignes */
 for ($j=1 ; $j<=10 ; $j++) {

     for ($i=1 ; $i<=10 ; $i++) {
         echo $i*$j;
         echo ' ';
     }
     echo "\n";

 }

 /***** carré creux *****/

 /* une ligne d'étoiles et passage à la ligne */
 for ($i=1 ; $i<=10 ; $i++) {
     echo '*';
 }
 echo "\n";

 /* les lignes creuses */
 for ($j=1 ; $j<=8 ; $j++) {
     /* une ligne creuse*/
     echo "*";
     for ($i=1 ; $i<=8 ; $i++) {
         echo ' ';
     }
     echo "*\n";
 }

 /* une ligne d'étoiles et passage à la ligne */
 for ($i=1 ; $i<=10 ; $i++) {
     echo '*';
 }
 echo "\n";