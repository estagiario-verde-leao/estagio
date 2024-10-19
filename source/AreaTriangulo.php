<?php

namespace Source;


class AreaTriangulo
{

    /* 
Em PHP, "double" é um sinônimo para o tipo de dados "float". 
Ambos se referem a números de ponto flutuante, que são números que 
têm uma parte inteira e uma parte fracionária, separados por um ponto decimal.
*/
    private float $base;
    private float $altura;

    public function __construct()
    {
        echo "O MÉTODO CONSTRUTOR \"__construct()\" DA CLASSE class AreaTriangulo() FOI CHAMADO." . PHP_EOL;
        $this->base = $this->lerEntrada("Digite a base do triângulo cuja área deseja calcular: ");
        $this->altura = $this->lerEntrada("Digite a altura do triângulo cuja área deseja calcular: ");
    }

    private function lerEntrada($mensagem)
    {
        echo $mensagem;
        return readline();
    }

    public function calcularArea()
    {
        return ($this->base * $this->altura) / 2 . PHP_EOL;
    }

    public function exibirArea()
    {
        echo "1 - CHAMADA DO  MÉTODO exibirArea() DA CLASSE AreaTriangulo()" . PHP_EOL;
        $area = $this->calcularArea();
        echo "A área do triângulo em questão é: " . $area . PHP_EOL;
    }

    public function __destruct()
    {
        echo "2 - CHAMADA DO  MÉTODO __destruct() DA CLASSE AreaTriangulo()" . PHP_EOL;
    }
}