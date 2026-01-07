<?php

// Encapsulamento - métodos de visibilidade: PUBLIC, PROTECTED, PRIVATE
class Conta {
    private float $saldo = 0;
    private bool $chequeEspecial;
    public function __construct(float $saldo, bool $chequeEspecial=false) 
    {
        $this->saldo += $saldo;
        $this->chequeEspecial = $chequeEspecial;
    }

    public function sacar(float $valor) 
    {
        if(($valor > $this->saldo) && ($this->chequeEspecial == false) || ($valor > $this->saldo+100) && $this->chequeEspecial == true ) {
            echo "Saldo indisponível <br>";
            echo "<hr>";
            return false;
        } else {
            echo "Saldo atual: {$this->saldo} <br>";
            $this->saldo -= $valor;
            echo $this->saldo." <br>";
        }
    }
        public function depositar($valor)
    {
        if($valor>0) {
            if($valor<=100) {
                echo "Saldo inicial: R$ {$this->saldo} <br>";
                $this->saldo += $valor;
                echo "Você depositou R$ $valor <br>";
                echo "Saldo atual: R$ $this->saldo <br>";
                echo "<hr>";
                return false;
            } else {
                echo "Atenção, você só pode depositar até R$ 100 a cada operação <br>";
                return false;
            }
        } else {
            echo "Erro na solicitação";
            echo "<hr>";
            return false;
        }
    }
}


$conta1 = new Conta(500, false);
$conta1->depositar(100);
$conta1->sacar(200);
echo "<br>";

$conta2 = new Conta(1500, true);
$conta2->sacar(1800);
$conta2->sacar(700);
$conta2->sacar(901);
echo "<hr>";

$conta3 = new Conta(150, true);
$conta3->depositar(200);
$conta3->sacar(500);