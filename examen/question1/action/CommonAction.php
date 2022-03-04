<?php
	session_start();

    abstract class CommonAction {
        public function execute() {
            $data = $this->executeAction();
            return $data;
        }

        abstract protected function executeAction();
    }