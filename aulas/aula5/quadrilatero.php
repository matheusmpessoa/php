<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quadrilatero</title>
</head>

<body>
    <p>Faca uma classe Quadrilatero que contenha um atributo lado1.
        <br> Sabe-se que Quadrados e Retangulos sao Quadrilateros. É possível calcular área e perímetro de ambos Quadriláteros.
        <br> AreaQuadrado = lado1*lado1 PerimQuadrado = 4*lado1 AreaRet = lado1*lado2 PerimRet = 2*(lado1+lado2)
    </p>

    <?php
        class Quadrilatero{
            private $lado1;

            public function __construct($lado1){
                $this->lado1 = $lado1;
            }

            public function getLado1(){
                return $this->lado1;
            }

            public function calcArea(){
                return "Area: QUADRILATERO EH GERAL";
            }

            public function calcPerim(){
                return "Area: QUADRILATERO EH GERAL";
            }
        }

        class Quadrado extends Quadrilatero{
            public function __construct($lado1){
                parent::__construct($lado1);
            }

            public function calcArea(){
                return $this->getLado1()*$this->getLado1();
            }

            public function calcPerim(){
                return 4*$this->getLado1();
            }
        }

        class Retangulo extends Quadrilatero{
            private $lado2;

            public function __construct($lado1,$lado2){
                parent::__construct($lado1);
                $this->lado2 = $lado2;
            }

            public function calcArea(){
                return $this->getLado1()*$this->lado2;
            }

            public function calcPerim(){
                return 2*($this->getLado1() + $this->lado2);
            }
        }
        $quad = new Quadrado(9);
        $ret = new Retangulo(10,2);
        $aquad = $quad->calcArea();
        $aret = $ret->calcArea();
        echo "<p> $aquad </p>";
        echo "<p> $aret </p>";
        $qq = new Quadrilatero(1);
        $aqd = $qq->calcArea();
        echo $aqd;

    ?>
</body>

</html>
