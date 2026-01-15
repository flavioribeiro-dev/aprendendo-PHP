<?php

class Conexao {
    private $conexao;
    public function __construct() 
    {
        $this->conexao = "Conectado com o banco de dados <br>";
        echo "Conexão realizada com sucesso <br>";
    }
    public function __destruct()    // Esse método é O MAIS ADEQUADO, pois garante o devido  "encerramento" da Classe ao final de sua execução (que é justamente o comportamento desejado)
    {
        $this->conexao = null;
        echo "Conexão encerrada automaticamente ao final de sua execução <br>";
    }

    public function consulta() {
        echo "Consulta realizada no Banco de Dados <br>";
    }
    
    // --- uma forma como (I) podemos encerrar uma Classe (adicionando-a ao final da class)
    public function encerrarConexao() {
        $this->conexao = null;
        echo "método alternativo que precisa ser invocado após a execução da CLasse para garantir o devido encerramento da conexão <br>";
    }
}

$conexao = new Conexao();
$conexao->consulta();
// $conexao->encerrarConexao();     --- Exemplo de chamada para encerramento da conexão (I)


// ----- outra forma (II) de encerrar a Classe (forma manual, que precisa ser realizada sempre ao final do script)
unset($conexao);
echo "Encerrando script...";