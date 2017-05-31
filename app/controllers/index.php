<?php 

namespace app\Controllers;

//ESSA CLASSE CONTROLER, DEFINE AS ACOES QUE SERAO TOMADAS MEDIANTE O ENCAMINHAMENTO AS SUAS RESPECTIVAS ACTIONS
class Index {
    
    //CADA FUNCTION EH UMA ACTION
    public function empresa() {
        echo 'Controller: Index, Action: Empresa';
    }
    
    public function index() {
        echo 'Controller: Index, Action: Index';
    }
    
    public function outputTeste() {
        echo 'Classe funcionando';
    }
    
}