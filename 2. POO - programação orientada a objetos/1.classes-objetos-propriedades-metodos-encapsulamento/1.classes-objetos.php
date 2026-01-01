<?php

class CarroInicial {
    public string $cor = '';
    public string $modelo = '';
    public int $ano = 0;

    public function ligar() 
    {
        return "Ligando...";
    }
    public function acelerar() 
    {
        return "Acelerando...";
    }
    public function freiar() 
    {
        return "Parando...";
    }
}

// Instanciando uma Classe (criando um Objeto de fato)
$carro1 = new CarroInicial;
var_dump($carro1);
$carro1->cor = 'azul';
$carro1->modelo = "Gol";
// echo($carro1->ligar());
// echo($carro1->acelerar());
// echo($carro1->freiar());
echo("{$carro1->modelo} está {$carro1->acelerar()}");
var_dump($carro1);

// -------------------------
$carro2 = new CarroInicial;
$carro2->modelo = "Ford Ka";
var_dump($carro2);
print_r("{$carro2->modelo} está {$carro2->ligar()}");

$carro2->modelo="ferrari";
$carro2->ano=2000;
$carro2 -> cor = "vermelho";
var_dump($carro2);

// --------------------------
$carro3 = new CarroInicial;
var_dump($carro3);

$carro3 -> modelo = 'fusca';
$carro3 -> cor = "amarelo";
$carro3 -> ano = 1990;
var_dump($carro3);