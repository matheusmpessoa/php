<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Carro</title>
    </head>

    <body>
        <p>

            Enunciado:
            <br> Faça uma classe chamada Pneu que possua um atributo de durabilidade (um inteiro). A classe carro possui uma marca e quatro Pneus como atributo. Um carro pode acelerar se todos os Pneus tiverem um valor de durabilidade acima de 0. Cada vez que um carro acelera os quatro Pneus perdem 10 pontos de durabilidade. Faça quatro métodos de troca de Pneu, um para cada posição. Os construtores das classes também devem ser implementados assim como os testes.
        </p>

        <?php
            class Pneu{
            public $durabilidade;
                 public function __construct($durabilidade){
                     $this->durabilidade = $durabilidade;
                 }

                 public function estaEmBomEstado(){
                     if($this->durabilidade > 0){
                         return true;
                     }else{
                         return false;
                     }
                 }

                 public function reduzirDurabilidade(){
                     $this->durabilidade = $this->durabilidade - 10;
                 }

             }

             class Carro{
                 public $marca, $p1, $p2, $p3, $p4;

                 public function __construct($marca, Pneu $p1, Pneu $p2, Pneu $p3, Pneu $p4){
                      $this->marca = $marca;
                      $this->p1 = $p1;
                      $this->p2 = $p2;
                      $this->p3 = $p3;
                      $this->p4 = $p4;
                 }

                 public function acelerar(){
                     if($this->p1->estaEmBomEstado() &&
                        $this->p2->estaEmBomEstado() &&
                        $this->p3->estaEmBomEstado() &&
                        $this->p4->estaEmBomEstado()){
                            $this->p1->reduzirDurabilidade();
                            $this->p2->reduzirDurabilidade();
                            $this->p3->reduzirDurabilidade();
                            $this->p4->reduzirDurabilidade();
                        }else{
                            echo "Algum Pneu esta estragado.";
                        }
                 }

                 public function trocarPneu1(Pneu $pneunovo){
                    $this->p1 = $pneunovo;
                 }

                 public function trocarPneu2(Pneu $pneunovo){
                    $this->p2 = $pneunovo;
                 }

                 public function trocarPneu3(Pneu $pneunovo){
                    $this->p3 = $pneunovo;
                 }

                 public function trocarPneu4(Pneu $pneunovo){
                    $this->p4 = $pneunovo;
                 }
             }
        ?>
    </body>
</html>
