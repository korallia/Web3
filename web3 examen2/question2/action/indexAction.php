<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/DatabaseDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $response = "";
            if(isset($_POST["choice"])){
                $value = $_POST["choice"];

                if($value ==1){
                   $response =DatabaseDAO::getNbrRows();
                }
                elseif($value ==2){
                    $response = DatabaseDAO::getDate();
                }
                elseif($value ==3){
                    $response = "Non-implementer";
                }

                return compact("response");
                
                
            }
        }
    }