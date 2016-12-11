<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ex1 - E-commerce</title>
</head>

<body>
    <?php
        abstract class Produto{

            protected $preco, $qtdProduto;

            public function __construct(){
                $this->preco = $preco;
                $this->qtdProduto = $qtdProduto;
            }

            abstract public function promocao();
        }

        class Eletrodomesticos extends Produto{

            public function promocao(Produto $preco){
                return $promocao - ($this->$preco * 0.8);
            }
        }

        class Roupas extends Produto{

            public function promocao(Produto $preco){
                return $promocao - ($this->$preco * 0.85);
            }
        }

        class Moveis extends Produto{

            public function promocao(Produto $preco){
                return $promocao - ($this->$preco * 0.87);
            }
        }

        $teste = new Produto(100, 50);
        $teste->Roupas(new promocao);
        echo "<p> $preco </p>";
    ?>
</body>

</html>
