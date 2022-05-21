<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Question exam</title>
        <meta charset="utf-8">
        <link href="css/global.css" rel="stylesheet" />
    </head>
    <body>
        <div class="clock">
			<h1>
				Base de données
			</h1>
			<div class="result">
			<?= $data["response"] ?>
				

			</div>
			<div class="info">
				<!-- Compléter la balise form -->
				<form action="" method="post">
					<div class="form-line">
						<div>Choix : </div>
						<div>
							<select name="choice">
								<option value="">--</option>
								<option value="1" <?= (isset($_POST['choice']) && $_POST['choice'] ==1 ?'selected':'')?>>Nombre de tables</option>
								<option value="2" <?= (isset($_POST['choice']) && $_POST['choice'] ==2 ?'selected':'')?>>Date</option>
								<option value="3" <?= (isset($_POST['choice']) && $_POST['choice'] ==3 ?'selected':'')?>>Sauvegarder</option>
							</select>
						</div>
					</div>
					<div class="btn-section">
						<button>Afficher</button>
					</div>
				</form>
			</div>
		</div>
    </body>
</html>