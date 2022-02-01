<?php
    function execute(){
        $formattedDate = date("Y-m-d H:i:s", time());
        if(!empty($_POST["pointage"]))
        {
            $score =$_POST["pointage"]/1000;
            file_put_contents("results.txt",$score." ".$formattedDate.PHP_EOL , FILE_APPEND);
        }
    }
?>