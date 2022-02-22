<?php
session_start();

    function execute() {
        $postits = array();
        if ( isset($_SESSION['post-its'])){
            $postits = $_SESSION['post-its'];
        }
        return compact('postits');
    }

  
?>



