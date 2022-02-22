<?php

class ContentDao{

    public static function setContent($data){
        file_put_contents("data\data.txt",$data);
    }

    public static function getContent(){
        if ( is_file("data\data.txt")){
            return file_get_contents("data\data.txt");
        }
        else{
            return "";
        }
    }
}