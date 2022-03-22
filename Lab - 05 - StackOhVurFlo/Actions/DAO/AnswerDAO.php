<?php

require_once("Actions/Connexion.php");

class AnswerDAO{
    public static function getAnswers(){
        $connection = Connection::getConnection();

        $statement = $connection->prepare("SELECT author, answer FROM stack_answers");

        $statement->setFetchMode(PDO::FETCH_ASSOC); // Seulement lors de select = $row["first_name"], sinon $row[0]
        $statement->execute();

        
        $rows = $statement->fetchAll();
        
        
        
        return $rows;
    }


    public static function addAnswer($answer,$author){
        $connection = Connection::getConnection();
        $statement = $connection->prepare("INSERT INTO stack_answers (author, answer) VALUES(?,?)" );
        $statement->bindParam(1, $author); 
        $statement->bindParam(2, $answer);
        echo "Adding: ". $author. ' : '. $answer;
        //DID ALL THE LEGWORK, GOTTA FUCKING USE IT (execute())
        $statement->execute();
        print_R( $connection->errorInfo());
        exit();
    }
}