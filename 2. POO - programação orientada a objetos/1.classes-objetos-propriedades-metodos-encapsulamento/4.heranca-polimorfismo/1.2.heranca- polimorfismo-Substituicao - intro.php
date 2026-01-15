<?php

// Polimorfismo POR SUBSTITUIÇÃO x Polimorfismo DE SOBRECARGA (não suportado ainda pelo PHP)

class Animal {
    public function emitirSom() 
    {
        return "sem som <br>";
    }
}

class Peixe extends Animal {
    public $nome = 'peixe';
    public function emitirSom()
    {
        return "{$this->nome} diz gluglu";
    }
}

class Cachorro extends Animal {
    public $nome="cachorro";
    public function emitirSom()
    {
        return "O {$this->nome} diz Au Au <br>";
    }
}

class FilaBrasileiro extends Cachorro {
    public $nome = "fila";
    public function emitirSom()
    {
        return "{$this->nome} faz Ruff Ruff <br>";
    }
}

class Gato extends Animal {
    public $nome = "gato";
    public function emitirSom()
    {
        return "O {$this->nome} faz Miau <br>";
    }
}

// ==============================================

$cachorro = new Cachorro;
// print($cachorro->emitirSom());

$gato = new Gato;
// print($gato->emitirSom());

$fila = new FilaBrasileiro;
// print($fila->emitirSom());
// print("Cachorro faz {$cachorro->emitirSom()} e o Fila faz {$fila->emitirSom()}");

$peixe = new Peixe;

// =======================================

function fazerOAnimalEmitirSom($animal) {
    echo $animal->emitirSom();
}

// $animais = [$cachorro, $gato, $fila];
$animais = array($cachorro, $gato, $fila, $peixe);
foreach($animais as $animal) {
    print($animal->emitirSom());
    // fazerOAnimalEmitirSom($animal);
}