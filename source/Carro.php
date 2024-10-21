<?php

namespace Source;

class Carro
{
    private $modelo;
    private $ano;

    // Construtor
    public function __construct($modelo, $ano)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function mostrarDetalhes()
    {
        echo "Modelo: " . $this->modelo . ", Ano: " . $this->ano;
    }
}