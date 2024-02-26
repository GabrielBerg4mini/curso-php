<?php
print "<h2>Crie uma função que recebe dois parâmetros, base e expoente, e retorne a base elevada ao expoente.</h2><br> <br> <br> <br> <br> ";

function ResultadoExponenciaçao($base, $expoente)
{

    print "Valores escolhidos base: $base e expoente: $expoente <br>";

    $resultado = pow($base, $expoente);
    // $resultado2 = $base ** $expoente;

    print "valor da potencia:  <strong>$resultado</strong> "; //$resultado2
}

ResultadoExponenciaçao(2, 8);
