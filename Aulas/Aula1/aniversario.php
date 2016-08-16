<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aniversário</title>
    </head>
    <body>
        <?php
            /*
            Crie uma classe Pessoa que possua os atributos nome e idade.
            Toda pessoa faz aniversário (mostre a idade)
            e toda pessoa pode mudar de nome
            (mostre na tela a mensagem: "Nome antigo XXXXX mudado para YYYYY").

            Crie uma forma para testar a classe Pessoa usando as urls com query string do método GET
            */
            class Pessoa {
                public $nome, $idade;

                public function __construct($nome, $idade){
                    $this->nome = $nome;
                    $this->idade = $idade;
                }

                public function aniversário(){
                    echo $this->nome;
                    echo $this->idade;
                }
            }

            $a = $_GET["nome"];
            $b = $_GET["idade"];
            $c = new Pessoa($a,$b);
            $c->aniversário();
        ?>
    </body>
</html>
