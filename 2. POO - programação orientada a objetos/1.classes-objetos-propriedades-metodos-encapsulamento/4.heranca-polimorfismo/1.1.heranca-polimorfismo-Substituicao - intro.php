<?php

// Polimorfismo POR SUBSTITUIÇÃO x Polimorfismo DE SOBRECARGA (não suportado ainda pelo PHP)

class Animal {
    public function emitirSom() 
    {
        return "sem som <br>";
    }
}

class Peixe extends Animal {
    public function emitirSom()
    {
        return "gluglu";
    }
}

class Cachorro extends Animal {
    public function emitirSom()
    {
        return "Au Au <br>";
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