<?php
print "<h2>Crie um programa para informar quais e quantas notas são necessárias para entregar o mínimo de cédulas
para um determinado valor informado pelo usuário considerando notas de R$ 100, R$ 50, R$ 10, R$ 5 e R$ 1.
Seu programa deve mostrar apenas as notas utilizadas. Por exemplo, ao solicitar R$18, o programa deve
informar apenas a seguinte informação (note que não foram exibidas informações sobre as demais cédulas): 1
nota(s) de R$ 10. 1 nota(s) de R$ 5. 3 nota(s) de R$ 1.</h2><br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br>


function saqueDeNotas($valorSaque)
{
    $resto = $valorSaque;

    $notaDe100 = floor($resto / 100);
    $resto %= 100;
    $notaDe50 = floor($resto / 50);
    $resto %= 50;
    $notaDe10 = floor($resto / 10);
    $resto %= 10;
    $notaDe5 = floor($resto / 5);
    $resto %= 5;

    print "O valor de saque $valorSaque irá sacar: <br> Notas de 100: $notaDe100. <br> Notas de 50: $notaDe50. <br> Notas de 10: $notaDe10. <br> Notas de 5: $notaDe5. <br> E Moedas de 1: $resto";
}

saqueDeNotas(188);
