<?php
	require_once("action/CommonAction.php");

	class IndexAction extends CommonAction {

	
		protected function executeAction() {

           if ( !empty($_GET['vider'])){
                $_SESSION['chickens'] = array();
         
                header('Location: index.php' );
                exit();
                
            }

            if ( empty($_SESSION['chickens'])){
                $_SESSION['chickens'] = array();
            }
            $_SESSION['chickens'][] = [rand(1,400), rand(1,940)];
            $chickens = $_SESSION['chickens'];
            return compact("chickens");
		}
	}
