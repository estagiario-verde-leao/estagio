<?php

namespace Source;

class Carro
{
    private $marca;
    private $ano;

    // Construtor
    public function __construct($marca, $ano)
    {
        /*
        $this é uma referência ao objeto atual, ou seja, a instância da classe em que o método está sendo chamado.
        modelo é um atributo da classe, que pertence a cada instância da classe. 
        Quando você usa $this->modelo, está acessando o atributo modelo dessa instância específica.
        $modelo é um parâmetro do método construtor (ou de qualquer outro método) que foi passado quando o método foi chamado.
        Então, essa linha $this->modelo = $modelo, pega o valor passado para o parâmetro $modelo e o atribui ao atributo modelo do objeto.
        
        De outra maneira: 
        $modelo é a propriedade, 
        $this->modelo é o atributo.
        $this->modelo = $modelo, nos diz que a propriedade $modelo será atribuída ao atributo modelo que for passado na instância em index.php.
        
        Ou ainda, quando a classe for instanciada e o objeto criado, os parametros passados na instanciação da classe, 
        são os atributos das propriedades declaradas na classe.  
        */

        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function showInfoarro()
    {
        // echo "1 - CHAMADA DO  MÉTODO showInfoFsphp()" . PHP_EOL;
        // echo "Marca " . $this->marca . ", ano  " . $this->ano . "\n";

    }
}