<?php

class Calculadora {
    // Definindo um Atributo Constante (CONST)...
    public const PI = 3.1415;
    public const VERSION = "1.0.3";

    // Definindo a Função como Estática (STATIC)...
    public static function AreaCirculo(float $raio) 
    {
        return self::PI * $raio * $raio;
        // Essa Função utiliza uma CONSTANTE que é própria da Classe. Dessa forma, ela precisa acessá-la através do SELF ao invés do THIS...

        // THIS --> se refere à INSTÂNCIA.
        // SELF --> se refere à CLASS.
    }
}

// Da forma normal, a variável precisaria ser instanciada
$calc = new Calculadora;
// print($calc->AreaCirculo(10)); 
// a Função Estática NÃO PODE SER MODIFICADA
// Ela NÃO TEM ACESSO À INSTÂNCIA DO OBJETO (gerada com o NEW), pois é uma Função da Classe (não do Objeto instanciado)

// Dessa forma, a Função Estática pode ser acessada diretamente a partir da Classe da seguinte forma...
$area = Calculadora::AreaCirculo(5);   
echo($area."<br>");

echo("Versão desse projeto: ".Calculadora::VERSION);

// --- Obs: para CONSTANTES e MÉTODOS ESTÁTICOS, devemos utilizar o SELF, não o THIS.