<?php
    require_once("action/DAO/Connection.php");
    class DatabaseDAO {

        public static function getDate() {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT Now() as temps");

            $statement->setFetchMode(PDO::FETCH_ASSOC); 
            $statement->execute();

            
            $row = $statement->fetch();
            
            
            
            return $row["temps"];

    
        }
        public static function getNbrRows() {
            $connection = Connection::getConnection();

        
            $statement = $connection->prepare("SELECT COUNT(*) as num FROM information_schema.tables WHERE table_schema = 'exam_db'");

            $statement->setFetchMode(PDO::FETCH_ASSOC); 
            $statement->execute();

            
            $row = $statement->fetch();
            
            
            
            return $row["num"];

    
        }

    }