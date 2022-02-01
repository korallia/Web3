<?php
        require_once("action/resultsaction.php");
        $data = execute();

    require_once("partial/header.php")
?>
            <div class="results-container">
                <h1>
                    Résultats
                </h1>
                <?php
                    foreach ($data["lines"] as $line){
                ?>
                <div> 
                    - <?=$line ?>
                </div>
                <?php
                    }
                ?>
        
 <?php
     require_once("partial/footer.php")
 ?>           