<?php
 //commentaire controle é pour faire des commentaires automatiques
 $valeur = 3; #variable 
 $username = "john";
// ==== conparaison de type
if( $username == "john"){
	$username = $username . " smith"; 
	// pour concat deux strings on utile le point 
}
?>
<!-- phpt = php tags (snippet seulement faite sur le vscode de l'école) -->
<!-- phpe = php echoe (snippet seulement faite sur le vscode de l'école) -->
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<!-- Nom : <?= $username ?>  -->
		<!-- version plus courte  -->
		Nom : <?php echo $username ?> 
		<!-- version plus longue -->
	</body>
</html>







