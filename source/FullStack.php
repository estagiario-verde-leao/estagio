<?php


namespace Source;


class FullStack
{
    public $fsPhp;

    /**
     * MinhaClasse constructor.
     * @param array $arrayInicial
     */
    public function __construct(array $arrayInicial = []) //A variável $arrayInicial do tipo array e vazio é passada como argumento no método;
    {
        $this->fsPhp = $arrayInicial;
        //Diz também que à propriedade fsPhp será atribuído o array $arrayInicial=[].
        //A propriedade $fsphp é inicializada quando a classe é instanciada. A ela é atribuido o valor que $arrayInicial tiver.
    }

    /**
     * Métodos getArray e setArray são adicionados para acessar e modificar a propriedade.
     * @return array
     */
    public function getArray()
    {
        return $this->fsPhp;
        //Quando o método getArray() for chamado no programa, ele retornará o valor contido em $fsPhp, que por enquanto está vazia (a variável),
        //pois $arrayInicial[] ainda está vazio.
    }

    public function setArray(array $novoArray)
    {
        $this->fsPhp = $novoArray;
    }
}