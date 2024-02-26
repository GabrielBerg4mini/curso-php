<?php
print "<h2>Crie uma função que irá receber dois valores, o dividendo e o divisor. A função deverá imprimir o resultado
e o resto da divisão destes dois valores.</h2><br> <br> <br> <br> <br>";


function ResultadoEResto($dividendo, $divisor)
{
    print "Valores escolhidos dividendo: $dividendo e divisor: $divisor <br> <br>";
    $divisão = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;

    print "Resultado: <strong>$divisão</strong> e o Resto:<strong>$resto</strong>";
}

ResultadoEResto(20, 12);
