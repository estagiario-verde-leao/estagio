<?php


namespace Source;


class SayHello
{
    /**
     * Um método construtor vazio é perfeitamente válido em PHP. 
     * Serve como um ponto de entrada quando a classe é instanciada, mesmo que não faça nada. 
     * Pode ser útil futuramente se você quiser adicionar alguma lógica de inicialização à classe.
     */
    public function __construct()
    {
        //* Code
    }
    /**FUNÇÃO QUE RETORNA UMA SAUDAÇÃO QUANDO É INSTANCIADA
     * @return [type]
     */
    public function sayHello(): void
    {
        echo "Olá estagiário!" . PHP_EOL;
    }

    public function __destruct()
    {
        //* Code
    }
}