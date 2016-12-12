<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pokemon</title>
    </head>
    <body>
        <?php
            class Pokemon{
                public $nome, $tipo, $numero;

                public function __construct($nome, $tipo, $numero){
                    $this->nome = $nome;
                    $this->tipo = $tipo;
                    $this->numero = $numero;
                }

                public function status(){
                    echo "<h1> Pokemon: $this->nome </h1>";
                    echo "<p> Numero: $this->numero </p>";
                    echo "<p> Tipo: $this->tipo </p>";
                }
            }

            class Trainer{
                public $nome, $pokeBag;

                public function __construct($nome){
                    $this->nome = $nome;
                    $this->pokeBag = array();
                }

                public function capturar(Pokemon $p){
                    foreach($this->pokeBag as $pokebola){
                        if($pokebola->pokemon == null){
                            $pokebola->guardarPokemon($p);
                            break;
                        }
                    }
                }

                public function listarPokemons(){
                    foreach($this->pokeBag as $pokebola){
                        if($pokebola->pokemon != null)
                            $pokebola->pokemon->status();
                    }
                }

                public function adquirirPokeBola(){
                    $this->pokeBag[] = new PokeBola();
                }
            }

            class PokeBola{
                public $pokemon;

                public function guardarPokemon(Pokemon $pokemon){
                    $this->pokemon = $pokemon;
                }
            }
            //EXERCICIO: Fazer um metodo que mostre quantas pokebolas
            //estao vazias.
            //TESTEM: 1 Trainer, 3 pokebolas e 2 pokemons caputrados
            $t = new Trainer("Misty");
            $t->adquirirPokebola();
            $p = new Pokemon("Togepi", "Terra", 8);
            $t->capturar($p);
            $t->adquirirPokebola();
            $q = new Pokemon("Staryu", "Agua", 8);
            $t->capturar($q);
            $t->adquirirPokebola();
            $t->listarPokemons();
        ?>
    </body>
</html>
