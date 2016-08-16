<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pneu</title>
    </head>

    <body>
        <p>Faça uma classe chamada Pneu que possua um atributo. Um carro pode acelerar se todos os Pneus tiverem um valor de durabilidade acima de 0. Cada vez que um carro acelera os quatro Pneus perdem 10 pontos de durabilidade. Faça quatro métodos de troca de Pneu, um para cada posição. Os contrutores das classes também devem ser implementados assim como os testes.</p>

        <?php
                class Pneu{
                    public $durabilidade, $pneu;

                    public function __construct($durabilidade, $pneu){
                        $this->durabilidade = $durabilidade;
                        $this->pneu = $pneu;
                    }

                    public function getDurabilidade(){
                        return $this->durabilidade;
                    }

                    public function diminuiDurab(){
                        $this->durabilidade = $this->durabilidade - 10;
                        echo $this->durabilidade;
                    }
                }

                class Carro{
                    public $pneu1, $pneu2, $pneu3, $pneu4;

                    public function __construct($pneu1, $pneu2, $pneu3, $pneu4){
                        $this->pneu1 = $pneu1;
                        $this->pneu2 = $pneu2;
                        $this->pneu3 = $pneu3;
                        $this->pneu4 = $pneu4;
                    }

                }

                $pn = new Pneu();
                $pn->diminuiDurab();
                echo "\n" .$pn->getDurabilidade();
            ?>
    </body>
</html>
