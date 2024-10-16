<?php

use Source\SayHello;

require './vendor/autoload.php';

$obj_saudacao = new SayHello("estagiario");
$obj_saudacao->sayHello() . PHP_EOL;

// Destroi o objeto (variável) $obj_saudacao;
// É desnecessário aqui, pois o método __destruct() é chamado automaticamente se existir na classe.
unset($obj_saudacao);