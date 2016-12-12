<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Endereço</title>
    </head>

    <body>
        <?php
                class Endereco{
                    public $logradouro, $bairro, $cidade;

                    public function __construct($logradouro, $bairro, $cidade){
                        $this->logradouro = $logradouro;
                        $this->bairro = $bairro;
                        $this->cidade = $cidade;
                    }

                    public function mostrarDados(){
                        echo "<p> Logradouro: $this->logradouro </p>";
                        echo "<p> Bairro: $this->bairro </p>";
                        echo "<p> Cidade: $this->cidade </p>";
                    }
                }

                class Aluno{
                    public $nome, $endereco;

                    public function __construct($nome, Endereco $endereco){
                        $this->nome = $nome;
                        $this->endereco = $endereco;
                    }

                    //public function __construct($nome, $logradouro, $bairro, $cidade){
                    //    $this->nome = $nome;
                    //    $this->endereco = new Endereco($logradouro, $bairro, $cidade);
                    //}

                    public function mostrarDados(){
                        echo "<p> Nome: $this->nome </p>";
                        $this->endereco->mostrarDados();
                    }

                }

                class PaoDeQueijo{

                    public function mostrarDados(){
                        echo "<p> Eh feito de queijo! </p>";
                    }
                }


                //$end = new Endereco("Rua: Teste", "Teste", "Teste");
                $pdq = new PaoDeQueijo();
                $aluno = new Aluno("Aluno1",$pdq);
                //$aluno = new Aluno("Aluno1","Rua: Teste", "Teste", "Teste");
                $aluno->mostrarDados();
            ?>
    </body>
</html>
