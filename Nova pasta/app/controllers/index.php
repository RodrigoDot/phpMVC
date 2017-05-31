<?php 

namespace app\Controllers;

require_once ("../vendor/dot/controller/Action.php");

use \vendor\dot\Controller\Action;

//ESSA CLASSE CONTROLER, DEFINE AS ACOES QUE SERAO TOMADAS MEDIANTE O ENCAMINHAMENTO AS SUAS RESPECTIVAS ACTIONS
class Index extends Action{
        
    //CADA FUNCTION EH UMA ACTION
    public function empresa() {
        $nomes = array();
        $nomes[] = "Index";
        $nomes[] = "empresa";
        
        $this->view->title = "Empresa";
        $this->view->nomes = $nomes;
        $this->render(empresa);
    }
    
    public function index() {
        
        $nomes = array();
        $nomes[] = "index";
        $nomes[] = "index";
        
        $this->view->title = "Index";
        $this->view->nomes = $nomes;
        $this->render(index);
    }
        
    public function pagenotfound() {
        include('../app/views/index/404.phtml');
    }
    
    public function outputTeste() {
        echo 'Classe funcionando';
    }
    
    
}