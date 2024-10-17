<?php
// O use faz o autoimport da classe
use Source\SayHello;
// O require faz o autocarregamento das depedndências que o projeto necessita.
require './vendor/autoload.php';

/* Abaixo vemos que o IDE já reconheceu que "estagiario" é a propriedade $property, 
declarada lá na classe SayHello() e passada como parâmetro no método construtor.*/

$obj_saudacao = new SayHello("estagiario");
$obj_saudacao->sayHello() . PHP_EOL;

/* 
O método unset() destrói o objeto (variável) $obj_saudacao, instância da classe SayHello();
É desnecessário aqui, pois o método __destruct() é chamado automaticamente se ele existir na classe SayHello(). 
Resumidamente: sempre que houver a necessidade de se fazer uma saudação dentro da aplicação, o método 
sayHello() será chamado. 
A classe é instanciada, suas propriedades e seus métodos ficam disponíveis, as funções realizam aquilo que devem
realizar, em seguida  propriedades são destruídas para desalocar recursos.
Perceba que unset() é aplicado a variáveis, que a instância da classe SayHello() é atribuída ao 
objeto $obj_saudacao que é uma variável.
*/
unset($obj_saudacao);

if (!isset($obj_saudacao)) {
    echo "A variável \$obj_saudacao, instância da classe SayHello(), " . PHP_EOL . "que recebeu \"estagiario\" como parâmetro, não está mais em uso e foi destruída liberando recurso.";
}