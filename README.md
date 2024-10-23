### ESTAGIO_PROJECT
Projeto de estudo para o entendimento dos conceitos de classes, objetos e funções no PHP.

<details>
<summary>CARACTERÍSTICAS DO PROJETO :eye: </summary>
Projeto de estudo de Programação Orientada a Objetos - POO com Apache2, PHP 8.3, MySql, Composer, rodando em Ubuntu 24.04 em servidor local. O projeto usa o conceito de VirtualHost do Apache. 
</details>

<details>
<summary>CLONANDO A BRANCH "dev-master" DO REPOSITÓRIO `estagio_project`. :eye: </summary>

    $ sudo git clone --branch dev-master https://github.com/estagiario-verde-leao/estagio_project.git.
</details>
<details>
<summary>ESTRUTURA DE "www" ANTES DA CLONAGEM DO REPOSITÓRIO :eye: </summary>

    .
    ├──drwxr-xr-x 2 root root 4096 May 13 09:09 html
    ├──drwxr-xr-x 4 dev dev  4096 Oct 14 18:14 php_oo_project
    ├──drwxr-xr-x 9 dev dev  4096 Oct 14 01:37 phpoo
O usuário corrente é "dev". 
</details>

<details>
<summary>ESTRUTURA DE "www" APÓS A CLONAGEM DO REPOSITÓRIO :eye: </summary>

    .
    ├──drwxr-xr-x 5 root root 4096 Oct 16 10:08 estagio_project
    ├──drwxr-xr-x 2 root root 4096 May 13 09:09 html
    ├──drwxr-xr-x 4 dev dev  4096 Oct 14 18:14 php_oo_project
    ├──drwxr-xr-x 9 dev dev  4096 Oct 14 01:37 phpoo
Repare que como root é o proprietário do diretório `estagio_project`, o usuário dev não tem permissão de escrita no diretório. Resolvemos isso dando ao usuário corrente (dev no caso), a propriedade sobre o diretório do projeto.

    $ sudo chown -R $USER:$USER /var/www/estagio_project
Isso só é possível porque dev é usuário com privilégios root.
</details>

<details>
<summary>ESTRUTURA DE "www" COM A ALTERAÇÃO DE PROPRIETÁRIO DO DIRETÓRIO :eye: </summary>

        .
    ├──drwxr-xr-x 5 dev dev 4096 Oct 16 10:08 estagio_project
    ├──drwxr-xr-x 2 root root 4096 May 13 09:09 html
    ├──drwxr-xr-x 4 dev dev  4096 Oct 14 18:14 php_oo_project
    ├──drwxr-xr-x 9 dev dev  4096 Oct 14 01:37 phpoo
</details>

<details>
<summary>INICIANDO COM O COMPOSER :eye: </summary>

    $ composer init
    $ composer install
    $ composer update
    $ composer dump-autoload
Lembre-se, o composer oferece restrição ao root, por questóes de segurança, por isso alteramos a propriedade do diretório. Essa é uma das formas de resolver esse tipo de problema.
</details>

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
instanciada, ou seja no momento de criação do objeto, o método __construct() é invocado e as propriedades declaradas na classe são inicializadas com os valores que foram passados como parâmetros, porque como foi declarado no método, o construtor da classe __construct() recebe um argumento, $property.   
O método __construct, como foi dito é chamado automaticamente quando um novo objeto da classe é criado. 

`$this->property = $property;`: 
Dentro do construtor, o valor passado como argumento $property é atribuído à propriedade da instância $this->property. Isso inicializa a propriedade da classe com o valor fornecido ao criar um objeto.
Basicamente, essa estrutura permite que você crie um novo objeto da classe com um valor inicial para a propriedade, que depois pode ser usada dentro da classe. 
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

`public function __destruct()`: 
Uma variável (propriedade, no contexto da POO) é um espaço reservado na mémoria do computador para o 
armazenamento de diferentes tipos de dados. 
Quando uma propriedade é declarada, um espaço é alocado na memória. 
Quando a propriedade é inicializada o espaço alocado recebe o valor atribuído à variável declarada.
O método __destruct(), não destrói a propriedade ou varável, mas apenas o valor que lhe foi atribuído na inicialização.
Basta executar var_dump() no objeto, que é uma variável declarada para receber o valor da instância da classe e 
veremos que o valor retornado é NULL, indicando que o objeto está vazio, ou que as propriedades declaradas estão vazias.
De outra forma, o destrutor destrói o valor das propriedades atribuídas ao objeto, mas não a propriedade em si que continua a existir, mas isso ocorre automaticamente quando o objeto sai de escopo ou é explicitamente destruído usando unset(), como neste caso. 
O método unset() é uma função interna do PHP usada para destruir variáveis especificadas.
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
    use Source\Carro;
    use Source\FsPhp;
    use Source\FullStack;
    use Source\Presentation;
    use Source\SayHello;

    require './vendor/autoload.php';

    //INSTANCIANDO A CLASSE class SayHello - CRIANDO O OBJETO $obj_saudacao.
    $obj_saudacao = new SayHello("estagiario");
    $obj_saudacao->sayHello() . PHP_EOL;
    echo PHP_EOL;
    unset($obj_saudacao);
    if (!isset($obj_saudacao)) {
        echo "A variável \$obj_saudacao, instância da classe SayHello(), " . PHP_EOL .
        "que recebeu \"estagiario\" como parâmetro, não está mais em uso e foi destruída liberando recurso." . PHP_EOL;
    }

    echo PHP_EOL;

    /*
    Este código organiza a lógica de entrada e cálculo dentro de uma classe, 
    seguindo os princípios da programação orientada a objetos.
    readline() é uma função em PHP que lê uma linha de entrada do terminal. 
    Essencialmente, ela permite que você interaja com o usuário através do terminal, 
    solicitando e capturando a entrada do usuário. Imagine uma conversa no terminal: 
    você faz uma pergunta ou solicita uma entrada, e o usuário digita a resposta. 
    readline() captura essa resposta e a armazena em uma variável para que você possa usá-la no seu script.
    */

    //INSTANCIANDO A CLASSE class AreaTriangulo - CRIANDO O OBJETO $area.
    $area = new AreaTriangulo(); // Chamando o método construtor.
    $area->exibirArea();
    unset($area);
    if (!isset($area)) {
        echo "A variável \$area, instância da classe AreaTriangulo(), " . PHP_EOL .
        "não está mais em uso e foi destruída liberando recurso." . PHP_EOL;
    }

    echo PHP_EOL;

    //INSTANCIANDO A CLASSE class Presentation - CRIANDO O OBJETO $apresentacao.
    $apresentacao = new Presentation();
    $apresentacao->saudar();
    unset($apresentacao);
    echo PHP_EOL;

    //INSTANCIANDO A CLASSE FullStackPhp - CRIANDO O OBJETO $dev
    $dev = new FsPhp("Mysql", "Apache", "PHP", "Ubuntu", "PhpStorm", "HTML");
    $dev->showInfoFsphp();

    //INSTANCIANDO A CLASSE Carro - CRIANDO O OBJETO $carro1
    $carro1 = new Carro("Ford", 1956);
    $carro1->showInfoarro();

    //INSTANCIANDO A CLASSE Carro - CRIANDO O OBJETO $carro2
    $carro2  = new Carro("Chevrolet", 1937);
    $carro2->showInfoarro();

    $carros = [
    "Carro1" => $carro1,
    "Carro2" => $carro2
    ];
    var_dump($carros);


    //INSTANCIANDO A CLASSE FullStack - CRIANDO O OBJETO $obj_fullstack
    $obj_fullstack = new FullStack(arrayInicial:[
        "db_name" => "MySql",
        "server_name" => "Apache",
        "lang_name" => "PHP",
        "os_name" => "Ubuntu 22.04",
        "ide_name" => "PhpStorm",
        "markup_lang" => "HTML"
    ]);

    //Quando o método getArray() for chamado no programa, ele retornará o valor contido em $fsPhp.
    //Como a classe FullStack foi instanciada e o objeto $obj_fullstack foi criado, o método getArray() ficou disponivel para o objeto $obj_fullstack.

    // Aqui temos o objeto $obj_fullstack acessando o método getArray(), cujo retorno é um array, que será armazenado na variável $array.
    $array = $obj_fullstack->getArray();
    print_r($array);

</details>

<details>
<summary>O MÉTODO unset() :eye: </summary> 
</details>