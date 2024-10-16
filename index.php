<?php

use Source\SayHello;

require './vendor/autoload.php';

$obj_saudacao = new SayHello("estagiario");

echo "1 - CHAMADA DO  MÉTODO sayHello()" . PHP_EOL;
$obj_saudacao->sayHello() . PHP_EOL;