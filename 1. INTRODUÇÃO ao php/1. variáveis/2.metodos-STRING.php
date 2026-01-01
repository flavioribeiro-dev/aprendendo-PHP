<?php

// Para saber a quantidade de caracteres de uma String: STRLEN
$nome = "Flavio";
$sobrenome = "Ribeiro";
$qtde_caracteres_nome = strlen($nome);
$qtde_caracteres_sobrenome = strlen($sobrenome);

echo "Meu nome é $nome e ele tem $qtde_caracteres_nome caracteres <br>";
echo "Já meu sobrenome é $sobrenome tem $qtde_caracteres_sobrenome caracteres <br>";

// -------------------------------------------------------------------------

// Para saber a posição de um termo/letra/palavra em uma String: STRPOS
$frutas = "pera, uva, macã, salada mista <br>";
$posicao = strpos($frutas, 'uva');
echo $posicao."<br>";
// --- Retorna a posição do termo procurado. Se não encontrá-lo, seu retorno será um valor FALSE (resultado nulo)

// -------------------------------------------------------------------------

// Retorna uma parte de uma String: SUBSTR --> ('string', int_inicial, int_final)
$parteDesejada = substr($sobrenome, 2, 5);
echo $parteDesejada."<br>";