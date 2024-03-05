<?php
print "<h2>Faça um algoritmo que calcule o fatorial de um número.</h2><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>


print "Valor escolhido 4 <br>";

function calcularFatorial($fatorial)
{
    $resultado = 1;

    while ($fatorial > 1) {
        $resultado *= $fatorial;
        $fatorial--;
    }
    return $resultado;
}
print calcularFatorial(4);
