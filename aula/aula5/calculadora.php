<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quadrilatero</title>
</head>

<body>
    <?php
            class Calculadora{
                public $num1, $num2;

                public function __call($m, $args){
                    echo "Comportmaneto indefinido: $m";
                }

                public function __construct($num1, $num2){
                    $this->num1 = $num1;
                    $this->num2 = $num2;
                }

                public function somar(){
                    return $this->num1 + $this->num2;
                }

                public function sub(){
                    return $this->num1 - $this->num2;
                }

                public function mult(){
                    return $this->num1 * $this->num2;
                }

                public function divisao(){
                    if ($this->num2 != 0)
                        return $this->num1 / $this->num2;
                    else
                        echo "<p> Erro </p>";
                }
            }
            //$a = $_GET["n1"];
            //$b = $_GET["n2"];
            //$oper = $_GET["oper"];
            //$calc = new Calculadora($a,$b);
            //somar, sub, mult ou divisao
            //echo $calc->$oper();

            $a = "ola";
            $ola = 5;
            echo $a;
            echo $$a;

        ?>
</body>

</html>
