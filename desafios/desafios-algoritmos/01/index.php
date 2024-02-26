<?php
print "<h2>Crie uma função que dado dois valores (passados como parâmetros) mostre no console a soma, subtração,
multiplicação e divisão desses valores</h2>";

function SomaDeValores($valor1, $valor2)
{
    $soma = $valor1  + $valor2;
    $subtraçao = $valor1 - $valor2;
    $multiplicaçao = $valor1 * $valor2;
    $divisao = $valor1 / $valor2;
    print "$soma <br> $subtraçao <br> $multiplicaçao <br> $divisao";
}
SomaDeValores(20, 10);
