<?php
    function execute(){
        $data = file_get_contents("results.txt");
        $lines = explode("\n", $data);
        return compact("lines");
    }
?>