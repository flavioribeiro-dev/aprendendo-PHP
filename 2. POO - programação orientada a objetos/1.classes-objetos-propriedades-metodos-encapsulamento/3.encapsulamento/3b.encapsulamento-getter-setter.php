<?php

class Produto {
    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getPreco() {
        return $this->preco;
    }
    public function setNome($newNome) {
        if(gettype($newNome) == 'string') {
            $this->nome = $newNome;
        }
    }
    public function setPreco($newPreco) {
        if($newPreco>0) {
            $this->preco = $newPreco;
        }
    }
}

$produto1 = new Produto('Cadeira', 500);
// echo($produto1->preco);

// $produto1->preco = 100;
// var_dump($produto1);
print($produto1->getPreco());
$produto1->setPreco(100);
print($produto1->getPreco());

$produto1->setNome('Mouse');
print($produto1->getNome());