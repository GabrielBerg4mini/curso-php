<?php
print "<h2>Os triângulos podem ser classificados em 3 tipos quanto ao tamanho de seus lados:
    Equilátero: Os três lados são iguais. Isósceles: Dois lados iguais. Escaleno: Todos os lados são diferentes.
    Crie uma função que recebe os comprimentos dos três lados de um triângulo e retorne sua classificação quanto
    ao tamanho de seus lados. (Neste exemplo deve-se abstrair as condições matemáticas de existência de um
    triângulo).</h2> <br> <br> <br> <br> <br>";

function QualCadegoriaDeTriangulo($valor1, $valor2, $valor3)
{
    print "Valores Passado $valor1, $valor2 e $valor3 <br>";
    if ($valor1 === $valor2 && $valor2 === $valor3) {

        print "É da categoria Equilátero. <br><br><br>";
    } elseif ($valor1 === $valor2 || $valor1 === $valor3 || $valor2 === $valor3) {
        print "É da categoria Isóceles.<br><br><br>";
    } else {
        print "É da categoria Escaleno.<br>";
    }
}


QualCadegoriaDeTriangulo(10, 10, 10);
QualCadegoriaDeTriangulo(10, 20, 10);
QualCadegoriaDeTriangulo(10, 20, 30);
