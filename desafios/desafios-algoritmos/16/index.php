<?php
print "<h2>Utilizando a estrutura do Switch faça um programa que simule uma calculadora básica. O programa recebe como parâmetros dois valores numéricos e uma string referente à operação e a realize com os valores
numéricos na ordem que foram inseridos. Por exemplo: calculadora (2, ‘+’, 3). A função efetuará a soma de 2 e
3. Dica: Os sinais das operações são: ‘+’. ‘-’, ‘*’ e ‘/’. Crie um caso default para operações inválidas</h2><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>


print 'Valores usados para fazer o calculo, foi: 2 e 3. <br> <br>';

function calculadora($num1, $strOperador, $num2)
{
    switch ($strOperador) {
        case '+':
            print "Resultado: " . $num1 + $num2 . "<br>";
            break;
        case '-':
            print "Resultado: " . $num1 - $num2 . "<br>";
            break;
        case '*':
            print "Resultado: " . $num1 * $num2 . "<br>";
            break;
        case '/':
            print "Resultado: " . $num1 / $num2 . "<br>";
            break;
        default:
            print 'Só pode calcular usando números, e apenas com os operados: +, -, * e /.';
    }
}
calculadora(2, '+', 3);
calculadora(2, '-', 3);
calculadora(2, '*', 3);
calculadora(2, '/', 3);
