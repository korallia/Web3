<?php 
require_once("actions/consulterAction.php");
$data = execute();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post-its</title>
</head>
<body>

<h1>Les mémos....</h1>
<?php

if ( isset($data['postits']) ){
    ?>
    <ul>
    <?php
    foreach($data['postits'] as $postit){
    ?>
        <li> <?=$postit['tache'] ?></li>
    <?php
    }
    ?>
    </ul>

<?php
}
?>
<a href="index.php">Retour</a>


</body>
</html>