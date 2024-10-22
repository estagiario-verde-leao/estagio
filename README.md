### ESTAGIO_PROJECT
Projeto de estudo para o entendimento dos conceitos de classes, objetos e funções no PHP.

### CLONANDO A BRANCH `dev-master` DO REPOSITÓRIO `estagio_project`.
    $ sudo git clone --branch dev-master https://github.com/estagiario-verde-leao/estagio_project.git.

### ESTRUTURA DE "www" ANTES DA CLONAGEM DO REPOSITÓRIO
O usuário corrente é "dev". 

    .
    ├──drwxr-xr-x 2 root root 4096 May 13 09:09 html
    ├──drwxr-xr-x 4 dev dev  4096 Oct 14 18:14 php_oo_project
    ├──drwxr-xr-x 9 dev dev  4096 Oct 14 01:37 phpoo

### ESTRUTURA DE "www" APÓS A CLONAGEM DO REPOSITÓRIO
O usuário corrente é "dev". 

    .
    ├──drwxr-xr-x 5 root root 4096 Oct 16 10:08 estagio_project
    ├──drwxr-xr-x 2 root root 4096 May 13 09:09 html
    ├──drwxr-xr-x 4 dev dev  4096 Oct 14 18:14 php_oo_project
    ├──drwxr-xr-x 9 dev dev  4096 Oct 14 01:37 phpoo

Repare que como root é o proprietário do diretório `estagio_project`, o usuário dev não tem permissão de escrita no diretório. Resolvemos isso dando ao usuário corrente (dev no caso), a propriedade sobre o diretório do projeto.
   
    $ sudo chown -R $USER:$USER /var/www/estagio_project
Isso só é possível porque dev é usuário com privilégios root.
### ESTRUTURA DE "www" COM A ALTERAÇÃO DE PROPRIETÁRIO DO DIRETÓRIO
    .
    ├──drwxr-xr-x 5 dev dev 4096 Oct 16 10:08 estagio_project
    ├──drwxr-xr-x 2 root root 4096 May 13 09:09 html
    ├──drwxr-xr-x 4 dev dev  4096 Oct 14 18:14 php_oo_project
    ├──drwxr-xr-x 9 dev dev  4096 Oct 14 01:37 phpoo

### INICIANDO COM O COMPOSER   
  
    $ composer init
    $ composer update
Lembre-se, o composer oferece restrição ao root, por questóes de segurança, por isso alteramos a propriedade do diretório. Essa é uma das formas de resolver esse tipo de problema.

### ESTRUTURA DO PROJETO
    .
    ├── LICENSE 
    ├── README.md 
    ├── composer.json
    ├── composer.lock
    ├── index.php
    ├── source
    │        └── SayHello.php
    └── vendor

Aequivos gerados pelo GitHub durante a criação do repositório.

    ├── LICENSE 
    ├── README.md

Arquivo gerado pelo Composer durante a execução do comando `$ composer init`.
    
    ├── composer.json

Arquivo gerado pelo Composer durante a execução de `$ composer update`.

    ├──  composer.lock 

Arquivo criado manualmete.
    
    ├── index.php

Diretório/arquivo criados manualmente.
    
    ├── source
             └──SayHello.php

Diretório gerado pelo Composer durante a execução de `$ composer update`.
 
    ├── vendor     
<details>
<summary>CARACTERÍSTICAS DO PROJETO :eye: </summary>
Projeto de estudo de Programação Orientada a Objetos - POO com Apache2, PHP 8.3, MySql, Composer, rodando em Ubuntu 24.04 em servidor local. O projeto usa o conceito de VirtualHost do Apache. 
</details>

<details>
<summary>A CLASSE Say Hello :eye: </summary> 
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
        }
    }
### EXPLICANDO CADA COISA
`protected $property;`: 
Define uma propriedade chamada $property que tem visibilidade "protected". 
Isso significa que a propriedade pode ser acessada dentro da própria classe e por classes derivadas (subclasses), mas não diretamente de fora dessas classes.

`public function __construct($property)`: 
Este é o método construtor da classe, responsável por inicializar as propriedades da classe (nesse caso temos apenas $property. Repare que $property foi declarada, mas não foi inicializada) no momento em que a classe for
instanciada, ou seja no momento de criação do objeto, o método __construct() é invocado e as propriedades declaradas na classe são inicializadas com os valores passados como parâmetros, porque como foi declarado no método, o construtor da classe __construct() recebe um argumento, $property.   
O método __construct, como foi dito é chamado automaticamente quando um novo objeto da classe é criado. 

`$this->property = $property;`: 
Dentro do construtor, o valor passado como argumento $property é atribuído à propriedade da instância $this->property. Isso inicializa a propriedade da classe com o valor fornecido ao criar um objeto.
Basicamente, essa estrutura permite que você crie um novo objeto da classe com um valor inicial para a propriedade, que depois pode ser usada dentro da classe. 

`public function __destruct()`: 
Uma variável (propriedade, no contexto da POO) é um espaço reservado na mémoria do computador para o 
armazenamento de diferentes tipos de dados. 
Quando uma propriedade é declarada, um espaço é alocado na memória. 
Quando a propriedade é inicializada o espaço alocado recebe o valor atribuído à variável declarada.
O método __destruct(), não destrói a propriedade ou varável, mas apenas o valor que lhe foi atribuído na inicialização.
Basta executar var_dump() no objeto, que é uma variável declarada para receber o valor da instância da classe e 
veremos que o valor retornado é NULL, indicando que o objeto está vazio, ou que as propriedades declaradas estão vazias.
De outra forma, o destrutor destrói o valor das propriedades atribuídas ao objeto, mas não a propriedade em si que continua a existir, mas isso ocorre automaticamente quando o objeto sai de escopo ou é explicitamente destruído usando unset(), como neste caso. 
O destrutor é útil para liberar recursos específicos, mas não é algo que precisa ser usado para liberar memória de propriedades comuns.
Para entender de verdade execute var_dump ($objeto) alternadamente, antes e depois de unset();

Nesse exemplo:

**Propriedade**: Temos uma propriedade $property que é protegida.

**Construtor**: O construtor aceita um valor $property e inicializa a propriedade da instância com esse valor.

**Método sayHello**: Quando chamado, ele imprime uma saudação personalizada usando a propriedade $property.

Quando o objeto `$obj_saudacao` é criado, diz-se que a classe `SayHello()` foi instanciada e suas propriedades e métodos inicializados. Diz-se também que `$obj_saudacao` é um "novo" objeto SayHello().
Agora passamos a expressão "estagiario" como parâmetro em Sayhello (), porque foi declarado no método construtor que ele receberia argumento.

Quando o método sayHello é chamado é impresso (echo) no console de depuração, a palavra "estagiario", que concatenada com a string "Olá", produz a expressão de saudação "Olá estagiario".
</details>
<details>
<summary>O ARQUIVO index.php :eye: </summary> 

    <?php

    use Source\AreaTriangulo;
    use Source\Presentation;
    use Source\SayHello;

    require './vendor/autoload.php';

    $obj_saudacao = new SayHello("estagiario");
    $obj_saudacao->sayHello() . PHP_EOL;
    unset($obj_saudacao);
       if (!isset($obj_saudacao)) {
          echo "A variável \$obj_saudacao, instância da classe SayHello(), " . PHP_EOL . "que recebeu \"estagiario\" como parâmetro, não está mais em uso e foi destruída liberando recurso.";
        }

    $area = new AreaTriangulo();
    $area->exibirArea();
    unset($area);
       if (!isset($area)) {
         echo "A variável \$area, instância da classe AreaTriangulo(), " . PHP_EOL .
         "não está mais em uso e foi destruída liberando recurso." . PHP_EOL;
        }

    $apresentacao = new Presentation();
    $apresentacao->saudar();

Observe a classe `SayHello()` sendo instanciada `$obj_saudacao = new SayHello("estagiario");`.

Observe também a chamada do método `sayHello ()` e do método destrutor da classe `unset()`.
</details>

<details>
<summary>O MÉTODO unset() :eye: </summary> 
O método unset() é uma função do PHP usada para destruir variáveis especificadas. 

Quando você chama unset() em uma variável, o PHP remove essa variável do escopo atual, liberando qualquer memória associada a ela, porém se declararmos o método destrutor na classe, quando a classe for instanciada, o método construtor será chamado automaticamente ao fnal da execução.

Excluir da função SayHello() o método `__destruct()`, fazer a chamada do método `unset()` em `index.php` e ver o que acontece é um bom exercício.
</details>