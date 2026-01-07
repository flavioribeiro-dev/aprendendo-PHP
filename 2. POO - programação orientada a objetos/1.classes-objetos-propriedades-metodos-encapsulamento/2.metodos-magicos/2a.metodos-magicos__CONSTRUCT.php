<?php
// Aprendendo sobre o Método CONSTRUCT

class Carro {
    public string $modelo = '';
    public string $cor = '';
    public int $ano = 0;

    public function __construct(string $modelo, string $cor, int $ano)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function ligar()
    {
        return "Ligando...";
    }
    public function acelerar()
    {
        return "Acelerando...";
    }
    public function frear()
    {
        return "Desacelerando...";
    }
};

$carro1 = new Carro("ford ka", "branco", 2025);
var_dump($carro1);

$carro2 = new Carro('Fusca', "vermelho", 1930);
var_dump($carro2);
echo("Eu tenho um {$carro2->modelo} desde {$carro2->ano} e sou muito feliz");