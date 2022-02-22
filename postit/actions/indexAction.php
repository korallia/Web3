<?php
session_start();

    function execute() {
        if ( !isset($_SESSION['post-its'])){
            $_SESSION['post-its'] = array();
        }

        if ( isset($_POST['tache']) && isset($_POST['positionx']) && isset($_POST['positiony']) &&
            $_POST['tache'] != ""  ){
            
                
                $tache = $_POST['tache'];
                $positionx = $_POST['positionx'];
                $positiony = $_POST['positiony'];
                $_SESSION['post-its'][] = compact('tache', 'positionx', 'positiony');
        }
        $postits = $_SESSION['post-its'];
        return compact('postits');
    }
    
    function afficherPostIt($postit){

        ?><div class="postit" style="left: <?= $postit['positionx']?>px; top: <?= $postit['positiony']?>px;"><span><?= $postit['tache']?></span></div><?php
    }





