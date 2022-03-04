<?php
    require_once("action/CommonAction.php");
    require_once("action/StatsDAO.php");

    class StatsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        public function executeAction() {
            $lines =StatsDAO::count();
            $rooms =StatsDAO::countPerRoomType();

            return compact("lines","rooms");
        }
    }