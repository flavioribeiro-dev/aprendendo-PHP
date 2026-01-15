<?php

abstract class Calculadora {
    abstract public function CalcularArea();
}

class Quadrado extends Calculadora {
    public float $medidaLados = 0;
    public function __construct(float $medidaLados)
    {
        $this->medidaLados = $medidaLados;
    }
    public function CalcularArea()
    {
        return "Área do Quadrado: ".$this->medidaLados * $this->medidaLados."<br>";
    }
}

$calcQuadrado = new Quadrado(4.5);
echo $calcQuadrado->CalcularArea();

// ==================================================================

class Retangulo extends Calculadora {
    public float $medidaBase = 0;
    public float $medidaAltura = 0;
    public function __construct(float $medidaBase, float $medidaAltura)
    {
        $this->medidaBase = $medidaBase;
        $this->medidaAltura = $medidaAltura;
    }

    public function CalcularArea()
    {
        return "Área do Retânculo: ".$this->medidaBase * $this->medidaAltura."<br>";
    }
}

$retangulo = new Retangulo(2.5, 4);
echo $retangulo->CalcularArea();

// ==============================================================

class Triangulo extends Calculadora {
    public float $medidaAltura = 0;
    public float $medidaBase = 0;

    public function __construct(float $medidaBase, float $medidaAltura) {
        $this->medidaAltura = $medidaAltura;
        $this->medidaBase = $medidaBase;
    }

    public function CalcularArea()
    {
        $areaRetangulo = ($this->medidaBase) * ($this->medidaAltura / 2);
        return "Área do Retânculo: ".$areaRetangulo."<br>";
    }
}

$triangulo = new Triangulo(3,5);
echo $triangulo->CalcularArea();

// ======================================================