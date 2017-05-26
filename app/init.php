<?php

namespace app;

class Init {
    
    private $routes;
    
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    
    public function initRoutes() {
        $array['home'] = array('route' => '/phpmvc/public/index.php', 'controller' => 'index', 'action' => 'index');
        $array['empresa'] = array('route' => '/phpmvc/public/empresa.php', 'controller' => 'index', 'action' => 'empresa');
        $this->setRoutes($array);
    }
    
    public function run($url) {
        array_walk($this->routes, function($route) use($url) {
            if($url == $route['route']) {
                echo'Encontrou</br>';
            }
        });
    }
    
    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }
    
    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
    
}






