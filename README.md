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

Repare que como root é o proprietário do diretório `estagio_project`, o usuário dev não tem permissão de escrita no diretório. Resolvemos isso mudando a propriedade do diretório do projeto de root para dev. 
   
    $ sudo chown -R $USER:$USER /var/www/estagio_project

### ESTRUTURA DE "www" COM A ALTERAÇÃO DE PROPRIETÁRIO DO DIRETÓRIO
    .
    ├──drwxr-xr-x 5 dev dev 4096 Oct 16 10:08 estagio_project
    ├──drwxr-xr-x 2 root root 4096 May 13 09:09 html
    ├──drwxr-xr-x 4 dev dev  4096 Oct 14 18:14 php_oo_project
    ├──drwxr-xr-x 9 dev dev  4096 Oct 14 01:37 phpoo

### INICIANDO COM O COMPOSER   
  
    $ composer init
    $ composer update
Lembre-se, o composer oferece restrição ao root, por questóes de segurança.

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
</details>
<details>
<summary>O ARQUIVO index.php :eye: </summary> 

    <?php

    use Source\SayHello;

    require './vendor/autoload.php';

    $obj_saudacao = new SayHello("estagiario");
    $obj_saudacao->sayHello() . PHP_EOL;

    unset($obj_saudacao);

    if (!isset($obj_saudacao)) {
    echo "A variável \$obj_saudacao, instância da classe SayHello(), " . PHP_EOL . "que recebeu \"estagiario\" como parâmetro, não está mais em uso e foi destruída liberando recurso.";
    }
Observe a classe `SayHello()` sendo instanciada `$obj_saudacao = new SayHello("estagiario");`.

Observe também a chamada do método `sayHello ()` e do método destrutor da classe `unset()`.
</details>

<details>
<summary>O MÉTODO unset() :eye: </summary> 
O método unset() é uma função do PHP usada para destruir variáveis especificadas. 

Quando você chama unset() em uma variável, o PHP remove essa variável do escopo atual, liberando qualquer memória associada a ela, porém se declararmos o método destrutor na classe, quando a classe for instanciada, o método construtor será chamado automaticamente ao fnal da execução.

Excluir da função SayHello() o método `__destruct()`, fazer a chamada do método `unset()` em `index.php` e ver o que acontece é um bom exercício.
</details>