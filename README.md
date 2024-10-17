### ESTAGIO_PROJECT
Projeto PHP com Composer desenvolvido durante o estágio obrigatório em Verde-Leão Marketing Digital.

### A CLASSE `class SayHello()`
A class SayHello() possui um método, que quando chamado, imprime no console de depuração uma expressão de saudação.

    <?php

    namespace Source;

    class SayHello {
        protected $property;
        public function __construct($property) {
           $this->property = $property;
        }

        public function sayHello(): void {
            echo "1 - CHAMADA DO  MÉTODO sayHello()" . PHP_EOL;
            echo "Olá, " . $this->property . "!" . PHP_EOL;
        }

        public function __destruct() {
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

Quando o objeto `$obj_saudacao` é criado, diz-se que a classe `SayHello()` foi instanciada. Diz-se também que `$obj_saudacao` é um "novo" objeto SayHello().
Agora passamos a expressão "estagiario" como argumento em Sayhello ().

Quando o método sayHello é chamado é impresso (echo) no console de depuração, a expressão "estagiario", que concatenada com "Olá", produz a expressão de saudação "Olá estagiario".

###  O ARQUIVO index.php
    <?php

    use Source\SayHello;

    require './vendor/autoload.php';

    $obj_saudacao = new SayHello("estagiario");
    $obj_saudacao->sayHello() . PHP_EOL;

    unset($obj_saudacao);
Observe a classe `SayHello()` sendo instanciada `$obj_saudacao = new SayHello("estagiario");`.

Observe também a chamada do método `sayHello ()` e do método destrutor da classe `unset()`.

### O MÉTODO unset()
O método unset() é uma função do PHP usada para destruir variáveis especificadas. Quando você chama unset() em uma variável, o PHP remove essa variável do escopo atual, liberando qualquer memória associada a ela. Vemos aqui que o  método unset() só funciona porque temos declarado dentro da função Sayhello() o método destrutor.
Excluir da função SayHello() o método `__destruct()`, fazer a chamada do `unset()` em `index.php` e ver o que acontece é um bom exercício