<?php

abstract class Animal {
    abstract public function emitirSom();
}

class Cachorro extends Animal {
    public function emitirSom() {
        return 'Au Au';
    }
}

class FilaBrasileiro extends Cachorro {
    public float $idade = 0;
    public string $nome;

    public function __construct(float $idade, string $nome) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function emitirSom()
    {
        if($this->idade <= 0.5) {
            // ---- Para acessarmos um método da Classe Pai, precisamos utilizar o prefixo "PARENT::"
            return parent::emitirSom();
        } else {
            return "Ruf Ruf Ruf";
        }
    }
}

$fila = new FilaBrasileiro(0.55, "dogão");
echo $fila->emitirSom();