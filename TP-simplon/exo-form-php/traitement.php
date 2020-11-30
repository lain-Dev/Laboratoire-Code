<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Traitement des données envoyées par formulaire</title>
</head>

<body>
  <?php
  $prenom = htmlspecialchars($_POST["prenom"]);
  $nom = htmlspecialchars($_POST["nom"]);
  $_SESSION["prenom"] = $prenom;
  $_SESSION["nom"] = $nom;
  echo "Les données du formulaire ont été mémorisées.<br>";
  echo "<a href=\"lien.php\">Cliquez sur ce lien pour vérifier.</a>";
  ?>
</body>

</html>