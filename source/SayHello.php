<?php


namespace Source;


class SayHello
{
    protected $property; //Declaração da variável (ou propriedade da classe SayHello) $property com visibilidade protectd.

    public function __construct($property) //Declaração do método construtor da classe passando a variável, ou propriedade $property como parâmetro.
    {
        // Isso inicializa a propriedade $property da classe SayHello, com o valor que for fornecido ao criar um objeto.
        $this->property = $property;
    }

    public function sayHello(): void
    {
        echo "Olá, " . $this->property . "!" . PHP_EOL;
    }

    public function __destruct()
    {
        //* Code
    }
}