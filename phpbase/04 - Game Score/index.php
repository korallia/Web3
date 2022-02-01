<?php
    require_once("action/indexaction.php");
    $data = execute();
    require_once("partial/header.php");
?>
            <div class="game-container">
                <canvas width="960" height="576"></canvas>

                <div class="save-form-section">
                    <form action="" method="post">
                        <button class="button">Enregistrer</button>
                        <input type="hidden" name="pointage" id="pointage" />
                    </form>
<?php
    require_once("partial/footer.php");
?>