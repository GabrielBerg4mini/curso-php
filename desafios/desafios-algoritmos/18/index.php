<?php
print '<h2>Faça um programa que leia um número entre 0 e 10, e escreva este número por extenso. Use o comando
switch. Crie um case default que escreva ‘Número fora do intervalo.’
</h2><br> <br> <br> <br> <br>'; //<h2></h2><br> <br> <br> <br> <br>


print "Número por exetenso, entre 0 e 10.<br><br>";

function numeroExtenso($numero)
{
    switch ($numero) {
        case '0':
            print 'Zero <br>';
            break;
        case '1':
            print "Um<br>";
            break;
        case '2':
            print "Dois<br>";
            break;
        case '3':
            print "Três<br>";
            break;
        case '4':
            print "Quatro<br>";
            break;
        case '5':
            print "Cinco<br>";
            break;
        case '6':
            print "Seis<br>";
            break;
        case '7':
            print "Sete<br>";
            break;
        case '8':
            print "Oito<br>";
            break;
        case '9':
            print "Nove<br>";
            break;
        case '10':
            print "Dez<br>";
            break;
        default:
            print 'Número fora do intervalo<br>';
    }
}

numeroExtenso('-1');
numeroExtenso('0');
numeroExtenso('1');
numeroExtenso('2');
numeroExtenso('3');
numeroExtenso('4');
numeroExtenso('5');
numeroExtenso('6');
numeroExtenso('7');
numeroExtenso('8');
numeroExtenso('9');
numeroExtenso('10');
numeroExtenso('11');
