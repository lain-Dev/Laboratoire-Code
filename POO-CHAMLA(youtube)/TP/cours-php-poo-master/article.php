<?php

/**
 * CE FICHIER DOIT AFFICHER UN ARTICLE ET SES COMMENTAIRES !
 * 
 * On doit d'abord récupérer le paramètre "id" qui sera présent en GET et vérifier son existence
 * Si on n'a pas de param "id", alors on affiche un message d'erreur !
 * 
 * Sinon, on va se connecter à la base de données, récupérer les commentaires du plus ancien au plus récent (SELECT * FROM comments WHERE article_id = ?)
 * 
 * On va ensuite afficher l'article puis ses commentaires
 */

 //on appel le fichier database(tjs appel en haut)
 require_once('libraries/database.php');

/**
 * 1. Récupération du param "id" et vérification de celui-ci
 */
// On part du principe qu'on ne possède pas de param "id"
$article_id = null;

// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $article_id = $_GET['id'];
}

// On peut désormais décider : erreur ou pas ?!
if (!$article_id) {
    die("Vous devez préciser un paramètre `id` dans l'URL !");
}

/**
 * 1. Connexion à la base de données avec PDO
 */
$pdo = getPdo();


/**
 * 3. Récupération de l'article en question
 * On va ici utiliser une requête préparée car elle inclue une variable qui provient de l'utilisateur : Ne faites
 * jamais confiance à ce connard d'utilisateur ! :D
 */
$query = $pdo->prepare("SELECT * FROM articles WHERE id = :article_id");

// On exécute la requête en précisant le paramètre :article_id 
$query->execute(['article_id' => $article_id]);

// On fouille le résultat pour en extraire les données réelles de l'article
$article = $query->fetch();

/**
 * 4. Récupération des commentaires de l'article en question
 * Pareil, toujours une requête préparée pour sécuriser la donnée filée par l'utilisateur (cet enfoiré en puissance !)
 */
$query = $pdo->prepare("SELECT * FROM comments WHERE article_id = :article_id");
$query->execute(['article_id' => $article_id]);
$commentaires = $query->fetchAll();

/**
 * 5. On affiche 
 */
$pageTitle = $article['title'];
$pageTitle = "Accueil";
//appel de la fonction render() et on indique les variables qui sont nécessaire pour affichage qui se trouve dans shows
render('articles/show', [
    'pageTitle' => $pageTitle, 
    'article' => $artile, 
    'commenataires' => $commentaires, 
    'article_id' => $article_id
    ]);
