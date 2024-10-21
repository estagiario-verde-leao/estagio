<?php
// O use faz o autoimport da classe

use Source\AreaTriangulo;
use Source\Carro;
use Source\Presentation;
use Source\SayHello;

// O require faz o autocarregamento das depedndências que o projeto necessita.
require './vendor/autoload.php';

/* Abaixo vemos que o IDE já reconheceu que "estagiario" é a propriedade $property, 
declarada lá na classe SayHello() e passada como parâmetro no método construtor.*/

$obj_saudacao = new SayHello("estagiario"); // Chamando o método construtor.
$obj_saudacao->sayHello() . PHP_EOL;
echo PHP_EOL;
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
    echo "A variável \$obj_saudacao, instância da classe SayHello(), " . PHP_EOL .
        "que recebeu \"estagiario\" como parâmetro, não está mais em uso e foi destruída liberando recurso." . PHP_EOL;
}

/* readline() é uma função em PHP que lê uma linha de entrada do terminal. 
Essencialmente, ela permite que você interaja com o usuário através do terminal, 
solicitando e capturando a entrada do usuário. Imagine uma conversa no terminal: 
você faz uma pergunta ou solicita uma entrada, e o usuário digita a resposta. 
readline() captura essa resposta e a armazena em uma variável para que você possa usá-la no seu script.
 */

echo PHP_EOL;
/*Este código organiza a lógica de entrada e cálculo dentro de uma classe, 
seguindo os princípios da programação orientada a objetos.*/

$area = new AreaTriangulo(); // Chamando o método construtor.
$area->exibirArea();
/* unset($area);
if (!isset($area)) {
    echo "A variável \$area, instância da classe AreaTriangulo(), " . PHP_EOL .
        "não está mais em uso e foi destruída liberando recurso." . PHP_EOL;
} */
var_dump($area);

echo PHP_EOL;
$apresentacao = new Presentation();
$apresentacao->saudar();
unset($apresentacao);
echo PHP_EOL;

$carro = new Carro("Fusca", 1956);
$carro->mostrarDetalhes();