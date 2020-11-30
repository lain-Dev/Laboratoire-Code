<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <?php include("entete.php"); ?>
    
    <?php include("menus.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <?php include("pied_de_page.php"); ?>
    
    </body>
</html>

/*
Ce code suppose que votre page index.php  et celles qui sont incluses (comme menus.php  ) sont dans le même dossier. Si le menu était dans un sous-dossier appelé includes  , il aurait fallu écrire :

<?php include("includes/menus.php"); ?>
C'est le même principe que pour les liens relatifs, que vous connaissez déjà dans le langage HTML.
*/


