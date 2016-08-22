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

            /*
            foreach
            */
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
                    if($this->pokemon == null)
                         $this->pokemon = $pokemon;
                }
            }

            //TESTEM: 1 Trainer, 3 pokebolas e 2 pokemons caputrados
            $t = new Trainer("Ash");
            $t->adquirirPokeBola();
            $p = new Pokemon("Squirtle", "Água", 7);
            $t->capturar($p);
            $t->adquirirPokeBola();
            $t->capturar(new Pokemon("Blastoise","Agua",9));
            $t->adquirirPokeBola();
            $t->listarPokemons();
        ?>
    </body>
</html>
