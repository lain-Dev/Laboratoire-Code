<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Lecture des variables de session prenom et nom</title>
</head>

<body>
    <?php
    $prenom = $_SESSION["prenom"];
    $nom = $_SESSION["nom"];
    echo "Les données mémorisées dans les variables de session sont bien accessibles :<br><ul>";
    echo "<li>\$_SESSION[\"prenom\"] vaut " . $_SESSION["prenom"] . "</li>";
    echo "<li>\$_SESSION[\"nom\"] vaut " . $_SESSION["nom"] . "</li></ul>";
    ?>
</body>

</html>