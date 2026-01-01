<?php
// A PROMOÇÃO DE PROPRIEDADES é um recurso de simplificação na atribuição das Variáveis obtidas a partir do método Contruct. Essa forma prevê uma a declaração e atribuição direta desse valor à sua variável...

class CarroNovo {
    function __construct(public string $modelo, public string $cor, public int $ano){}  
    public function ligar()
    {
        return "Ligando...";
    }
}

$carro10 = new CarroNovo("Cross Fox", "Verde", 2018);
var_dump($carro10);
echo("Comprei um {$carro10->modelo} {$carro10->cor}, ano {$carro10->ano}");