<?php
    require_once("action/AdminIndexAction.php");
    $action = new AdminIndexAction();
    $data =$action->execute();
    $pageTitle="Bienvenu";
    require_once("partial/header.php");
?>
<div id="page-admin-index">
    <?php
    if($data["saved"]){
    ?>
      <div class="success-div"><strong>Succès : </strong>Sauvegarde effectuée</div>
            <?php
        }
    ?>
<form action="admin_index.php" method="post">
        <textarea name="text" cols="30" rows="10"><?= $data["text"] ?></textarea>
        <div class="text-center mt-large">
            <button>Sauvegarder</button>
        </div>
    </form>
</div>
<?php
	require_once("partial/footer.php");