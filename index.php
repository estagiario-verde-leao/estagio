<?php

use Source\SayHello;

require './vendor/autoload.php';

$obj_saudacao = new SayHello("estagiario");
$obj_saudacao->sayHello() . PHP_EOL;

/* 
Destrói o objeto (variável) $obj_saudacao, instância da classe SayHello();
É desnecessário aqui, pois o método __destruct() é chamado automaticamente se existir na classe SayHello(). 
*/
unset($obj_saudacao);