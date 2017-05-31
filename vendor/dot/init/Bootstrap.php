<?php
//CLASSE DE INICIALIZACAO DO SISTEMA

//DECLARACAO DO NAMESPACE
namespace vendor\dot\init;

//REQUISICAO DE INCLUSAO DO ARQUIVO DOS CONTROLLERS
require_once('../app/controllers/index.php');

//DECLARACAO ABSTRATA PARA QUE NAO POSSA SER INSTANCIADA DIRETAMENTE
abstract class Bootstrap {
    
private $routes;
    
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    
    abstract protected function initRoutes();
    
    //DEFINE AS ACOES TOMADAS CONSIDERANDO A ROTA DO USUARIO
    protected function run($url) {
        array_walk($this->routes, function($route) use($url) {
            if($url == $route['route']) {
                $class = "app\\Controllers\\".ucfirst($route['controller']); //controler aqui eh  referencia ao controller existente no $array dentro da funcao initRoutes
                $controller = new $class;//instancia a classe referenciada pelo namespacede $class
                $action = $route['action'];//define a action a ser acessada
                $controller->$action(); //action eh referencia a action na funcao initroutes 
            }
        });
    }
    
    //DEFINE A ROTA
    protected function setRoutes(array $routes) {
        $this->routes = $routes;
    }
    
    //COLETA A ROTA NO SERVIDOR PARA COMPARAR NA FUNCAO RUN
    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
    
}