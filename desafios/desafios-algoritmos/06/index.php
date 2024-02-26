<?php
print "<h2>Elabore duas funções que recebem três parâmetros: capital inicial, taxa de juros e tempo de aplicação. A
primeira função retornará o montante da aplicação financeira sob o regime de juros simples e a segunda
retornará o valor da aplicação sob o regime de juros compostos.
</h2><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>


function JurosSimples($capitalInicial, $taxaJuros, $tempoAplicado)
{
    print "Valores para calcular o Juros Simples: <br> Capital Inicial: <strong>$capitalInicial</strong> <br>
    Taxa de Juros: <strong>$taxaJuros</strong> <br> Tempo de Aplicação: <strong>$tempoAplicado</strong> <br> <br>";

    $juros = $capitalInicial * $taxaJuros * $tempoAplicado;
    $valorFinal = $capitalInicial + $juros;
    print "O valor do Juros, será: <strong>$juros.</strong> <br> ";
    print "O valor final junto com o Juros, será: <strong>$valorFinal</strong> <br> <br>";
}

JurosSimples(600, 0.12, 5);


function JurosComposto($capitalInicial, $taxaJuros, $tempoAplicado)
{

    print "Valores para calcular o Juros Composto: <br> Capital Inicial: <strong>$capitalInicial</strong> <br>
    Taxa de Juros: <strong>$taxaJuros</strong> <br> Tempo de Aplicação: <strong>$tempoAplicado</strong> <br> <br>";

    $valorFinal = $capitalInicial * (1 + $taxaJuros) ** $tempoAplicado;
    $juros = $valorFinal - $capitalInicial;
    print "O valor do Juros é: <strong>$juros</strong> <br>";
    print "O Valor Final com o Juros Composto é <strong>$valorFinal</strong>";
}

JurosComposto(1400, 0.07, 2);
