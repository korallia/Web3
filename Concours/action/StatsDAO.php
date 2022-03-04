<?php
   

    class StatsDAO  {

        public static function save($name,$roomType){
            file_put_contents("stats.txt",$name.";".$roomType.PHP_EOL, FILE_APPEND);
        }

        public static function count(){

            $lines = count(file("stats.txt"));
            return $lines;
        }

        public static function countPerRoomType(){
           $roomTypes =["Simple"=>0,"Double"=>0,"Suite"=>0];
           $lines = file("stats.txt");
           foreach ($lines as $line){
               $parts =explode(";",$line);
               
               if(count($parts)>=2){
                
                    $roomType = trim(end($parts));
                    if(isset($roomTypes[$roomType])){
           
                         $roomTypes[$roomType]++;
                    }
                }
           }
           return $roomTypes;
        }
    }
?>