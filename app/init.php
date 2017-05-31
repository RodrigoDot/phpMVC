<?php
//DECLARACAO DO NAMESPACE
namespace app;

//REQUISICAO DE INCLUSAO DOS ARQUIVOS
require_once('controllers/index.php');
require_once ("../vendor/dot/init/Bootstrap.php");

//DEFINICAO DO NAMESPACE
use \vendor\dot\init\Bootstrap;

//INSTANCIAMENTO DA CLASSE DE INICIALIZACAO EXTENDIDA DA SUPER CLASSE BOOTSTRAP
class Init extends Bootstrap {
    
    //DEFINE AS ROTAS POSSIVEIS PARA ENCAMINHA O USUARIO PARA SUAS RESPECTIVAS ACOES
    /**
    A FUNCAO INITROUTES DEFINE ARRAYS QUE RECEBEM A DECLARACAO DAS ROTAS
    ESSA DECLARACAO EH EM FORMA DE UM ARRAY SEMELHANTE AO QUE UTILIZAMOS COM JSON
    A ROTA($ROUTE) RECEBE UMA DEFINICAO(CAMINHO) UM CONTROLER(CONTROLLER) E UMA ACTION(ACTION)
    */
    protected function initRoutes() {
        $array['home'] = array('route' => '/phpmvc/public/index', 'controller' => 'index', 'action' => 'index');
        $array['empresa'] = array('route' => '/phpmvc/public/empresa', 'controller' => 'index', 'action' => 'empresa');
        $this->setRoutes($array);
    }
}
