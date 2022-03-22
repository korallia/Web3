<?php
    require_once("action/DAO/Connection.php");
    class SmartLightDAO {

        public static function getLightsStatus() {
            $connection = Connection::getConnection();

            // ' or 1=1 or '1'='1
            $statement = $connection->prepare("SELECT name, status FROM lights");

            $statement->setFetchMode(PDO::FETCH_ASSOC); // Seulement lors de select = $row["first_name"], sinon $row[0]
            $statement->execute();

            
            $rows = $statement->fetchAll();
            
            
            
            return $rows;

    
        }

    }