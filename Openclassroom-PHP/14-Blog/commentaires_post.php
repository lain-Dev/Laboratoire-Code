<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p>Poster message sur le blog :</p>
 
<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO commentaires (id_billet, auteur, commentaire, date_creation) VALUES(:save_id_billet, :save_auteur, :save_commentaire, NOW())');

$req->execute(array('save_auteur' => htmlspecialchars($_POST['auteur']), 
                    'save_commentaire' => htmlspecialchars($_POST['commentaire']), 
                    'save_id_billet' =>$_GET['billet']));

// Redirection du visiteur vers la page du minichat
header('Location: commentaires.php');
?>


</body>
</html>