<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Formulaires</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body>
    <p>Bonjour !</p>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p><!--Mauvaise pratique-->

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?> !</p><!--Bonne pratique-->

    <p>votre message: <?php echo $_POST['message']; ?></p>

    <p>votre choix: <?php echo $_POST['choix']; ?></p> <br>

    <p>votre case choisi: <?php echo isset($_POST['case']); ?></p> <br>
    <!--isset vérifie si une case est coché-->

    <p>aime t'il les frites: <?php echo $_POST['frites']; ?></p>

    <p>le speudo caché : <?php $_POST['pseudo']; ?></p>

    <p>mon fichier: <?php $_FILES['monfichier']; ?></p>
    <!--Vérifier tout d'abord si le visiteur a bien envoyé un fichier (en testant la variable $_FILES['monfichier']  avec isset()  ), et s'il n'y a pas eu d'erreur d'envoi (grâce à $_FILES['monfichier']['error']  ).

    Vérifier si la taille du fichier ne dépasse pas 1 Mo par exemple (environ 1 000 000 d'octets), grâce à $_FILES['monfichier']['size']  .

    Vérifier si l'extension du fichier est autorisée (il faut interdire à tout prix que les gens puissent envoyer des fichiers PHP, sinon ils pourraient exécuter des scripts sur votre serveur). Dans notre cas, nous autoriserons seulement les images (fichiers .png, .jpg, .jpeg et .gif).
    
    Nous analyserons pour cela la variable $_FILES['monfichier']['name']  .-->

    <p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

		</form>
   </body>
</html>
