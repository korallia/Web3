<?php
    require_once("action/CommonAction.php");
    require_once("action/StatsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
            if(!isset($_SESSION["Inscrit"])){
                $_SESSION["Inscrit"] = false;  
            }
        }

        protected function executeAction() {
                if(!empty($_GET["name"]) and !empty($_GET["type"]))
                {
                   StatsDao::save($_GET["name"],$_GET["type"]);
                   $_SESSION["Inscrit"] = true; 
                   
                }
                $Inscrit = $_SESSION["Inscrit"];
            return  compact("Inscrit");
        }
    }