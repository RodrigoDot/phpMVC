<?php

namespace app;

class Init {
    
    private $routes;
    
    public function __construct() {
        $this->initRoutes();
    }
    
    public function initRoutes() {
        $array['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
        $array['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
        $this->setRoutes($array);
    }
    
    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }
    
    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
    
}