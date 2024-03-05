<?php
print "<h4> Uma das vantagens da programação é a automatização de tarefas que não gostamos de realizar. Dito isto,
elabore uma função cujo objetivo é resolver a fórmula de Bhaskara. Para isso, sua função deve receber três
parâmetros, “ax2”, “bx” e “c”, de tal modo que na equação: 3x² - 5x + 12 os valores seriam respectivamente: 3,
-5, 12. Como retorno deve ser passado um vetor que tem 2 valores um para cada possível resultado, mesmo
que os resultados sejam iguais. Caso o delta seja negativo, retorne, ao invés do vetor, um string com a frase:
“Delta é negativo”.</h4><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>


function ResultadoFormulaBhaskara($ax2, $bx, $c)
{

    print "Valores para a fórmula $ax2, $bx e $c <br> <br>";

    $array = [];

    $delta = $bx ** 2 - 4 * $ax2 * $c;

    if ($delta < 0) {
        print "<strong>Delta é negativo</strong> <br> <br>";
    } else {
        $valor1 = (-$bx + sqrt($delta)) / 2;
        $valor2 = (-$bx - sqrt($delta)) / 2;


        array_push($array, $valor1, $valor2);

        print "Valor do Delta: $delta <br>";
        print "Valor mostrado usando array: [" . $array[0] . ", " . $array[1] . "] <br>";
        print "Primeiro valor: $valor1 <br> Segundo valor: $valor2 <br> <br>";
    }
}

ResultadoFormulaBhaskara(1, 8, -9);
ResultadoFormulaBhaskara(-12, -22, -11);
