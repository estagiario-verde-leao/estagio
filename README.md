### ESTAGIO_PROJECT
Projeto PHP com Composer desenvolvido durante o estágio obrigatório em Verde-Leão Marketing Digital.

### A CLASSE SayHello

    class SayHello
    {
    protected $property;
    public function __construct($property) 
    {
       $this->property = $property;
    }

    public function sayHello(): void
    {
        echo "1 - CHAMADA DO  MÉTODO sayHello()" . PHP_EOL;
        echo "Olá, " . $this->property . "!" . PHP_EOL;
    }

        public function __destruct()
    {
        echo "2 - CHAMADA DO  MÉTODO __destruct()" . PHP_EOL;
        echo "A variável \$obj_saudacao, instância da classe SayHello(), que recebeu " . PHP_EOL . $this->property . " como parâmetro, não está mais em uso e foi destruída liberando recurso.";
    }
}

`protected $property;`: Isso define uma propriedade chamada $property que tem visibilidade "protected". Isso significa que a propriedade pode ser acessada dentro da própria classe e por classes derivadas (subclasses), mas não diretamente de fora dessas classes.

`public function __construct($property)`: Este é o método construtor da classe. Ele é chamado automaticamente quando um novo objeto da classe é criado. Aqui, ele aceita um argumento $property.

`$this->property = $property;`: Dentro do construtor, o valor passado como argumento $property é atribuído à propriedade da instância $this->property. Isso inicializa a propriedade da classe com o valor fornecido ao criar um objeto.

Basicamente, essa estrutura permite que você crie um novo objeto da classe com um valor inicial para a propriedade, que depois pode ser usada dentro da classe. 

Nesse exemplo:

**Propriedade**: Temos uma propriedade $property que é protegida.

**Construtor**: O construtor aceita um valor $property e inicializa a propriedade da instância com esse valor.

**Método sayHello**: Quando chamado, ele imprime uma saudação personalizada usando a propriedade $property.

Quando você cria um novo objeto SayHello com o argumento "estagiário" e chama sayHello, ele imprime "Olá, estagiário!".