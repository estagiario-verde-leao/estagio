<?php

namespace Source;

class Carro
{
    private $marca;
    private $ano;

    // Construtor
    public function __construct($marca, $ano)
    {
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function showInfoarro()
    {
        // echo "1 - CHAMADA DO  MÉTODO showInfoFsphp()" . PHP_EOL;
        echo "Marca " . $this->marca . ", ano  " . $this->ano . "\n";
    }
}
