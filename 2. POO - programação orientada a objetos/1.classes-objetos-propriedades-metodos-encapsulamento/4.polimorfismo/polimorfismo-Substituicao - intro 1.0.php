<?php

// Polimorfismo POR SUBSTITUIÇÃO x Polimorfismo DE SOBRECARGA (não suportado ainda pelo PHP)

// Exemplos de Polimorfismo por Substituição...
// --- As Classes precisam ter exatamente os mesmos parâmetros em todos os casos

class Animal {
    public function emitirSom() 
    {
        return "sem som <br>";
    }
}

class Peixe extends Animal {}

$peixe1 = new Peixe;
echo($peixe1->emitirSom());


class Cachorro extends Animal {
    public function emitirSom()
    {
        return "Au Au";
    }
}

class FilaBrasileiro extends Cachorro {
    public function emitirSom()
    {
        return "Ruff Ruff <br>";
    }
}


class Gato extends Animal {
    public function emitirSom()
    {
        return "Miau <br>";
    }
}

$cachorro1 = new Cachorro;
print($cachorro1->emitirSom());

$gato1 = new Gato;
print($gato1->emitirSom());

$fila1 = new FilaBrasileiro;
print($fila1->emitirSom());

print("Cachorro faz {$cachorro1->emitirSom()} e o Fila faz {$fila1->emitirSom()}");