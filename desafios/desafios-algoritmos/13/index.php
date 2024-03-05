<?php
print "<h2> Crie um programa que exibe se um dia é dia útil, fim de semana ou dia inválido dado o número referente ao
dia. Considere que domingo é o dia 1 e sábado é o dia 7. Utilize a estrutura Switch.</h2><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>



function diaSemana($diaSemana)
{
    switch ($diaSemana) {
        case '1':
            print 'Final de semana. <br>';
            break;
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
            print 'Dia útil. <br>';
            break;
        case '7':
            print 'Final de semana <br>';
        default:
            print 'Dia inválido';
            break;
    }
}

diaSemana(1);
diaSemana(2);
diaSemana(3);
diaSemana(4);
diaSemana(5);
diaSemana(6);
diaSemana(7);
diaSemana('a');
