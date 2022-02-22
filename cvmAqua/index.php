<?php
require_once("action/indexAction.php");
$action = new IndexAction();
$data = $action->execute();

	$pageTitle="Accueil";
	require_once("partial/header.php");
?>
		    		
		    	<div class="page-content">
		    		<div id="page-index">
		    			<img src="images/water-drop.png" alt= ""/>

		    			<?=$data["text"]?>
		    		</div>
<?php
	require_once("partial/footer.php");
?>
		    	