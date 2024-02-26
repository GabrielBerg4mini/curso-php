<?php
print "<h3>Lidar com números em JavaScript pode dar muita dor de cabeça. Você já viu o que acontece quando faz o
seguinte comando no console: console.log(0.1 + 0.2); O resultado será: 0.30000000000000004. Outra coisa
importante de observar, é o fato que o ponto é utilizado no lugar da vírgula e vice versa. Com isso, vamos fazer
um exercício simples para mostrar dinheiro sempre da forma correta. Desenvolva uma função JavaScript para
que ela receba um valor como 0.30000000000000004 e retorne R$0,30 (observe a vírgula e o ponto).
</h3><br> <br> <br> <br> <br>";


function ResultandoEmFormaDeReal($reais)
{
    print "Valor a ser convertido em Real: $reais <br> <br>";
    $padrao = numfmt_create("PT-BR", NumberFormatter::CURRENCY);

    print "O resultado será <strong>" . numfmt_format_currency($padrao, $reais, "BRL") . "</strong>";
}

ResultandoEmFormaDeReal(0.302304);
