<?php

abstract class Animal {
    public int $idade;
    abstract public function emitirSom();

    public function digaOi() {
        return "oiii <br>";
    }
}

class Peixe extends Animal {
    public $nome = 'peixe';

    public function __construct(int $idade) 
    {
        $this->idade = $idade;
    }
    public function emitirSom()
    {
        return "{$this->nome} diz gluglu <br>";
    }
}

$peixe = new Peixe(15);
echo($peixe->emitirSom());
echo($peixe->digaOi());
echo "O peixinho tem {$peixe->idade} anos <br>";

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

