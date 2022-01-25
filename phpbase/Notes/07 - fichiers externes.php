<?php
require_once("lib/utils.php");
// permet d'intégrer un autre fichier
// require("..."); => ne s'assure pas qu'il est un seul importe comme require once
//include => trop faible, ne fait pas plenter la page si le ficher n'Est pas trouver
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Fichiers externes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Résultat : <?=resultatFormuleScientifique(2,3) ?>
	</body>
</html>







