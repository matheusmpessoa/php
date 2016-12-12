<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aniversário</title>
    </head>
    <body>
        <?php
            class Cachorro {

                public $raca, $nome;

                //O construtor define um estado
                //inicial para os objetos.

                public function __construct($raca, $nome){
                    $this->nome = $nome;
                    $this->raca = $raca;
                }

                public function latir(){
                    echo "<p> $this->nome : AU AU </p>";
                }

                public function mostrarRaca(){
                    echo "<p> $this->raca </p>";
                }
            }

            $a = $_GET["raca"];
            $b = $_GET["nome"];
            $c = new Cachorro($a,$b);
            $c->latir();
            $c->mostrarRaca();
        ?>
    </body>
</html>
