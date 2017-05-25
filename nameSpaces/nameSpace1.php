<?php

//IMPORTACAO DOS ARQUIVOS DAS CLASSES
require_once("subClasses/Tester.php");
require_once("classes/Tester.php");
require_once("subSubclasses/Tester.php");

//INSTANCIANDO AS CLASSES COM A DECLARACAO DO NAMESPACE ATRIBUIDO NA CLASSE
$teste = new classes\Tester;
echo'</br>';
$teste = new subClasses\Tester;
echo'</br>';
$teste = new subSubClasses\Tester;

?>