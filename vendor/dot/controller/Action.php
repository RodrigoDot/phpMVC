<?php

//DECLARACAO DE NAMESPACE
namespace vendor\dot\Controller;

class Action {
    
    protected $view;
    
    public function __construct() {
        $this->view = new \stdClass;
    }
    
    //FUNCAO PARA ENCONTRAR A CLASSE E A ACTION AUTOMATICAMENTE
    /**
    ESSA FUNCAO RECEBE COMO PARAMETRO A ACTION QUE EH INDICADA NO MOMENTO EM QUE EH CHAMADA NO CONTROLLER
    $CURRENT PEGA A CLASSE ATUAL 
    $singleClassName PEGA O RESULTADO DE $CURRENT E REMOVE TODO O ENDERECO APP\CONTROLLERS DEIXANDO SOMENTE O NOME DA CLASSE
    POR FIM, INICIAMOS UM INCLUDE QUE UTILIZANDO OS DADOS COLETADOS.
    */
    public function render($action) {
        $current = get_class($this);
        $singleClassName = strtolower(str_replace("app\\Controllers\\", "", $current));
        include_once('../app/views/' . $singleClassName . '/' . $action . '.phtml');
    }
    
}
