<?php
// O use faz o autoimport da classe

use Source\AreaTriangulo;
use Source\Carro;
use Source\FsPhp;
use Source\FullStack;
use Source\Presentation;
use Source\SayHello;

require './vendor/autoload.php';

//INSTANCIANDO A CLASSE class SayHello - CRIANDO O OBJETO $obj_saudacao.
$obj_saudacao = new SayHello("estagiario");
$obj_saudacao->sayHello() . PHP_EOL;
echo PHP_EOL;
unset($obj_saudacao);
if (!isset($obj_saudacao)) {
    echo "A variável \$obj_saudacao, instância da classe SayHello(), " . PHP_EOL .
        "que recebeu \"estagiario\" como parâmetro, não está mais em uso e foi destruída liberando recurso." . PHP_EOL;
}

/* 
readline() é uma função em PHP que lê uma linha de entrada do terminal. 
Essencialmente, ela permite que você interaja com o usuário através do terminal, 
solicitando e capturando a entrada do usuário. Imagine uma conversa no terminal: 
você faz uma pergunta ou solicita uma entrada, e o usuário digita a resposta. 
readline() captura essa resposta e a armazena em uma variável para que você possa usá-la no seu script.
 */

echo PHP_EOL;
/*
Este código organiza a lógica de entrada e cálculo dentro de uma classe, 
seguindo os princípios da programação orientada a objetos.
*/

//INSTANCIANDO A CLASSE class AreaTriangulo - CRIANDO O OBJETO $area.
$area = new AreaTriangulo(); // Chamando o método construtor.
$area->exibirArea();
unset($area);
if (!isset($area)) {
    echo "A variável \$area, instância da classe AreaTriangulo(), " . PHP_EOL .
        "não está mais em uso e foi destruída liberando recurso." . PHP_EOL;
}

echo PHP_EOL;

//INSTANCIANDO A CLASSE class Presentation - CRIANDO O OBJETO $apresentacao.
$apresentacao = new Presentation();
$apresentacao->saudar();
unset($apresentacao);
echo PHP_EOL;

//INSTANCIANDO A CLASSE FullStackPhp - CRIANDO O OBJETO $dev
$dev = new FsPhp("Mysql", "Apache", "PHP", "Ubuntu", "PhpStorm", "HTML");
$dev->showInfoFsphp();

//INSTANCIANDO A CLASSE Carro - CRIANDO O OBJETO $carro1
$carro1 = new Carro("Ford", 1956);
$carro1->showInfoarro();

//INSTANCIANDO A CLASSE Carro - CRIANDO O OBJETO $carro2
$carro2  = new Carro("Chevrolet", 1937);
$carro2->showInfoarro();

$carros = [
    "Carro1" => $carro1,
    "Carro2" => $carro2
];
var_dump($carros);


$obj_fullstack = new FullStack([
    "db_name" => "MySql",
    "server_name" => "Apache",
    "lang_name" => "PHP",
    "os_name" => "Ubuntu 22.04",
    "ide_name" => "PhpStorm",
    "markup_lang" => "HTML"
]);

$array = $obj_fullstack->getArray();
print_r($array);

// Array assoiciativo. key =
$developer = [
    "Full Stack PHP Developer" => $array
];
print_r($developer);