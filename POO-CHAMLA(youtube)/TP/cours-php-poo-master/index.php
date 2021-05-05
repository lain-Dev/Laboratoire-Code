<?php

/**
 * CE FICHIER A POUR BUT D'AFFICHER LA PAGE D'ACCUEIL !
 * 
 * On va donc se connecter à la base de données, récupérer les articles du plus récent au plus ancien (SELECT * FROM articles ORDER BY created_at DESC)
 * puis on va boucler dessus pour afficher chacun d'entre eux
 */

 require_once('libraries/database.php');

/**
 * 1. Connexion à la base de données avec PDO
 */
$pdo = getPdo();

/**
 * 2. Récupération des articles
 */
// On utilisera ici la méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
$resultats = $pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
// On fouille le résultat pour en extraire les données réelles
$articles = $resultats->fetchAll();

/**
 * 3. Affichage
 */
$pageTitle = "Accueil";
//ouvre un tampon mais n'affiche pas de suite
ob_start();
require('templates/articles/index.html.php');
//on fait afficher tout ce qui se trouve dans le tampon précédement (ob_start();)
$pageContent = ob_get_clean();

require('templates/layout.html.php');
