<?php 

//pour afficher la page html, $path est le nom du fichier du chemin qu'on veut afficher, le tableau $variable est un tableua associatifs, dont les variables seront déclarées en fonction des besoins  
function render(string $path, array $variables = [])
{
    //extract:  Importe les variables dans la table des symboles
    extrat($variables);
    //ouvre un tampon mais n'affiche pas de suite
    ob_start();
    require('templates/' . $path . '.html.php');
    //on fait afficher tout ce qui se trouve dans le tampon précédement (ob_start();)
    $pageContent = ob_get_clean();

    require('templates/layout.html.php');

}