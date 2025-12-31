<?php

class Carro {
    public string $cor;
    public string $modelo;
    public int $ano;
}

// Instanciando uma Classe (criando um Objeto de fato)
$carro1 = new Carro;
var_dump($carro1);

$carro1->cor = 'azul';
var_dump($carro1);

// -------------------------
$carro2 = new Carro;
var_dump($carro2);

$carro2->modelo="ferrari";
$carro2->ano=2000;
$carro2 -> cor = "vermelho";
var_dump($carro2);

// --------------------------
$carro3 = new Carro;
var_dump($carro3);

$carro3 -> modelo = 'fusca';
$carro3 -> cor = "amarelo";
$carro3 -> ano = 1990;
var_dump($carro3);