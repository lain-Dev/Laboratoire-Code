Pour écrire un cookie, on utilise la fonction PHP  setcookie  (qui signifie « Placer un cookie » en anglais).

On lui donne en général trois paramètres, dans l'ordre suivant :

Le nom du cookie (ex. :  pseudo ).

La valeur du cookie (ex. :  M@teo21 ).

La date d'expiration du cookie, sous forme de timestamp (ex. :  1090521508 ).

cookie sécurisé:
<?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); ?>

exemple: ne jamais placé un cookie avant html
<?php
setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...

// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma super page PHP</title>
    </head>
    <body>
    
    etc.

lire un cookie:
<p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
</p>

Modifier Cookie:

Vous vous demandez peut-être comment modifier un cookie déjà existant ? Là encore, c'est très simple : il faut refaire appel à  setcookie  en gardant le même nom de cookie, ce qui « écrasera » l'ancien.

Par exemple, si j'habite maintenant en Chine, je ferai :

<?php setcookie('pays', 'Chine', time() + 365*24*3600, null, null, false, true); ?>