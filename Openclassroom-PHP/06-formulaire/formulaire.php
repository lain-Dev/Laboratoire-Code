<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<title>Formulaires</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
	<p>
		Cette page ne contient que du HTML.<br />
		Veuillez taper votre prénom :
	</p>

	<textarea name="message" rows="8" cols="45">
		Votre message ici.
	</textarea>
	<br>
	<select name="choix">
    	<option value="choix1">Choix 1</option>
    	<option value="choix2">Choix 2</option>
    	<option value="choix3">Choix 3</option>
    	<option value="choix4">Choix 4</option>
	</select>

	<p>case à cocher: </p>
	<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>
	<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher 2</label>
	<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher 3</label>
	<!--il est trés recommandé d'associer le label  pour le "for" pour associer la choix de la case !-->

	<p>Aimez vous les frites ?</p>
    <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
	<input type="radio" name="frites" value="non" id="non" /> 
	<label for="non">Non</label>

	<!--infos dans formulaire caché-->
	<input type="hidden" name="pseudo" value="Mateo21" />

	<form action="cible.php" method="post" enctype="multipart/form-data">

		<p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>

		<p>
			<input type="text" name="prenom" /> <input type="submit" value="Valider" />
		</p>
	</form>
</body>

</html>