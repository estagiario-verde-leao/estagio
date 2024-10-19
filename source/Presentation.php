<?php

namespace Source;


class Presentation
{

    /* 
Em PHP, "double" é um sinônimo para o tipo de dados "float". 
Ambos se referem a números de ponto flutuante, que são números que 
têm uma parte inteira e uma parte fracionária, separados por um ponto decimal.
*/
    private string $name;
    private int $age;

    public function __construct()
    {
        echo "O MÉTODO CONSTRUTOR \"__construct()\" DA CLASSE class Presentation() FOI CHAMADO." . PHP_EOL;
        $this->name = $this->lerEntrada("Digite o seu nome: ");
        $this->age = $this->lerEntrada("Digite a sua idade: ");
    }

    private function lerEntrada($mensagem)
    {
        echo $mensagem;
        return readline();
    }

    public function presentationFrase()
    {
        return ("Meu nome é " . $this->name . " e tenho " . $this->age);
    }

    public function saudar()
    {
        echo "1 - CHAMADA DO  MÉTODO saudar() DA CLASSE class presentation()" . PHP_EOL;
        $say = $this->presentationFrase();
        echo "Olá! " . $say . " anos de idade." . PHP_EOL;
    }

    public function __destruct()
    {
        echo "2 - CHAMADA DO  MÉTODO __destruct() DA CLASSE Presentation()" . PHP_EOL;
    }
}