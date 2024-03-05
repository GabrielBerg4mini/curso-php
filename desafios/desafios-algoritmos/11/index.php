<?php
print " <h2>As regras para o cálculo dos anos bissextos são as seguintes:
De 4 em 4 anos é ano bissexto;
De 100 em 100 anos não é ano bissexto;
De 400 em 400 anos é ano bissexto;
Prevalecem as últimas regras sobre as primeiras.
Partindo daí elabore uma função que recebe um ano e calcula se ele é ano bissexto, imprimindo no console a
mensagem e retornando true ou false.</h2><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>

print "Valores passados, 0, 4, 100, 400, 2023 e 2024 <br> <br> <br>";

function anoBissexto($ano)
{
    if ($ano <= 0) {
        print 'false<br>';
    } elseif ($ano % 400 == 0) {
        print 'true<br>';
    } elseif ($ano % 100 == 0) {
        print 'false<br>';
    } elseif ($ano % 4 == 0) {
        print 'true<br>';
    } else {
        print 'false';
    }
}

anoBissexto(0);
anoBissexto(4);
anoBissexto(100);
anoBissexto(400);
anoBissexto(2023);
anoBissexto(2024);
