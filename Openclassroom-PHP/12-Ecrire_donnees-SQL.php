
//La requête INSERT INTO  permet d'ajouter une entrée
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';
?>

//Insertion de données variables grâce à une requête préparée
<?php
// $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
// $req->execute(array(
// 	'nom' => $nom,
// 	'possesseur' => $possesseur,
// 	'console' => $console,
// 	'prix' => $prix,
// 	'nbre_joueurs_max' => $nbre_joueurs_max,
// 	'commentaires' => $commentaires
//     ));
//     //Généralement, on récupèrera des variables de $_POST  (issues d'un formulaire) pour insérer une entrée dans la base de données.

// echo 'Le jeu a bien été ajouté !';
?>

//UPDATE Données:
<?php
// $req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
// $req->execute(array(
// 	'nvprix' => $nvprix,
// 	'nv_nb_joueurs' => $nv_nb_joueurs,
// 	'nom_jeu' => $nom_jeu
// 	));
?>

//DELETE : supprimer des données
/*Il n'y a rien de plus facile :

DELETE FROM : pour dire « supprimer dans » ;

jeux_video : le nom de la table ;

WHERE : indispensable pour indiquer quelle(s) entrée(s) doi(ven)t être supprimée(s).

Si vous oubliez le WHERE  , toutes les entrées seront supprimées. Cela équivaut à vider la table. */