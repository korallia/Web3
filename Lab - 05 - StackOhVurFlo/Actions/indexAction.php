<?php
    require_once("Actions/CommonAction.php");
    require_once("Actions/DAO/AnswerDAO.php");


    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
               if(isset($_POST["answer"]) and isset($_POST["author"])){
                   
                   AnswerDAO::addAnswer($_POST["answer"],$_POST["author"]);
               }
               $answers =  AnswerDAO::getAnswers();

               return compact("answers");
    }
}