<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/ContentDAO.php");

    class AdminIndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
        }

        protected function executeAction(){
            $saved =false;
            if(!empty ($_POST["text"])){
                ContentDAO::setContent($_POST["text"]);
                $saved = true;
            }
            $text = ContentDAO::getContent();
            return compact("text","saved");
        }
    }