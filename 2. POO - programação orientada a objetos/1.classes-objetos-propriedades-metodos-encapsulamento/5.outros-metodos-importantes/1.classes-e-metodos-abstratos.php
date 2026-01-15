<?php

// Não faz sentido Instanciar a Classe ANIMAL, por se tratar apenas de uma "Classe Conceitual".
// -- Nesse caso, é recomendável defini-la como uma CLASSE ABSTRATA (que não poderá ser instanciada diretamente).
abstract class Animal {
    abstract public function emitirSom();
    // ---- E a partir da definição de um MÉTODO ABSTRATO, isso garante que todas suas Classes Filhas tenham esse método implementado na sua definição (mesmo que retornem um valor "nulo").
}

// $animal = new Animal;
// var_dump($animal);
// echo($animal->emitirSom()."<br>");

class Dinossauro extends Animal {       // Implementação obrigatória do método EMITIR-SOM!
    public $nome = "dino";
    public function emitirSom()
    {
        return 'ZZZZZZZZZZZ <br>';
    }
};



$dino = new Dinossauro;
var_dump($dino);
echo("O dinossauro {$dino->nome} diz {$dino->emitirSom()}");

// ================================================

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

$cachorro = new Cachorro;
// print($cachorro->emitirSom());

$gato = new Gato;
// print($gato->emitirSom());

$fila = new FilaBrasileiro(1, 'auau');
// print($fila->emitirSom());
// print("Cachorro faz {$cachorro->emitirSom()} e o Fila faz {$fila->emitirSom()}");

$peixe = new Peixe(10);

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