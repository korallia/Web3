<?php

	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();


?><!DOCTYPE html>
<html>
	<head>
		<title>La basse-cour</title>
		<link rel="stylesheet" href="css/global.css">
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Bienvenue à la basse-cour</h1>
		<div class="frame">
			<div id="container">
				<!-- Exemple de création d'un poulet -->
				<?php 
				foreach($data['chickens'] as $chicken){
				?>
				<div class="chicken" style="top:<?=$chicken[0]?>px;left:<?=$chicken[1]?>px"></div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="center">
			<form action="">
			<button name="vider" value="1">Vider</button>
			<form>
		</div>
	</body>
</html>