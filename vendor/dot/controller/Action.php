<?php

namespace vendor\dot\Controller;

class Action {
    
    protected $view;
    
    public function __construct() {
        $this->view = new \stdClass;
    }
    
    public function render($action) {
        $current = get_class($this);
        echo 'current :>' . $current . '</br>';
        $singleClassName = strtolower(str_replace("app/controllers/", "", $current));
        echo 'single class :>' . $singleClassName . '</br>';
        include_once('../app/views/index/' . $action . '.phtml');
    }
    
}


//include('../app/views/index/empresa.phtml');` 