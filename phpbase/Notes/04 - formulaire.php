<?php
// $_GET["info] ou $_POST["info] si la méthode est post ou get
$showBox = false;
if(!empty ($_GET["info"]) && strlen($_GET["info"]) > 5){
	$showBox = true;
}
?>



<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
	<?php
	// important de vérifier que l'info ne soit pas vide, car le serveur va vouloir processer l'information avant meme que l'utilisateur est remplis le champ
	if(!empty ($_GET["info"]) && strlen($_GET["info"]) > 5){ 
		?>

	<div style="color :green ; background-color:#999; border:1px solid black">
			Bravo!
		</div>
		<?php
		}
	?>
		<form action="04 - formulaire.php" method="get">
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







