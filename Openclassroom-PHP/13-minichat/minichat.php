<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>

<!--Retenir le pseudo. On doit actuellement saisir à nouveau son pseudo à chaque nouveau message. Comme vous le savez probablement, il est possible en HTML de préremplir un champ avec l'attribut value  . Par exemple :

<input type="text" name="pseudo" value="M@teo21" />
Remplacez M@teo21  par le pseudonyme du visiteur. Ce pseudonyme peut être issu d'un cookie, par exemple : lorsqu'il poste un message, vous inscrivez son pseudo dans un cookie, ce qui vous permet ensuite de préremplir le champ.

Proposez d'actualiser le minichat. Le minichat ne s'actualise pas automatiquement s'il y a de nouveaux messages. C'est normal, ce serait difficile à faire à notre niveau. À la base, le Web n'a pas vraiment été prévu pour ce type d'application. En revanche, ce que vous pouvez facilement faire, c'est proposer un lien « Rafraîchir » qui charge à nouveau la page minichat.php  . Ainsi, s'il y a de nouveaux messages, ils apparaîtront après un clic sur le lien.

Afficher les anciens messages. On ne voit actuellement que les 10 derniers messages. Sauriez-vous trouver un moyen d'afficher les anciens messages ? Bien sûr, les afficher tous d'un coup sur la même page n'est pas une bonne idée. Vous pourriez imaginer un paramètre $_GET['page']  qui permettrait de choisir le numéro de page des messages à afficher.-->