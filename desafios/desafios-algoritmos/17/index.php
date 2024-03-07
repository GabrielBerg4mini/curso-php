<?php
print '<h2> Um funcionário irá receber um aumento de acordo com o seu plano de
trabalho, de acordo com a tabela abaixo: <br>
| Plano |  Aumento<br> 
| A     |  10% <br>    
| B     |  15% <br>    
| C     |  20% <br>    
Faça uma função que leia o plano de trabalho e o salário atual de um funcionário e calcula e imprime o seu
novo salário. Use a estrutura switch e faça um caso default que indique que o plano é inválido.
</h2><br> <br> <br> <br> <br>'; //<h2></h2><br> <br> <br> <br> <br>


function calculoAumento($plano, $aumento, $salarioAtual)
{
    switch ($plano) {
        case 'A':
            $salarioAtual = ($aumento * $salarioAtual / 100) + $salarioAtual;
            print $salarioAtual . "<br>";
            break;
        case 'B':
            $salarioAtual = ($aumento * $salarioAtual / 100) + $salarioAtual;
            print $salarioAtual . "<br>";
            break;
        case 'C':
            $salarioAtual = ($aumento * $salarioAtual / 100) + $salarioAtual;
            print $salarioAtual . "<br>";
            break;
        default:
            print 'Plano invalido ';
            break;
    }
}

calculoAumento('A', 10, 1200);
calculoAumento('B', 15, 1200);
calculoAumento('C', 20, 1200);
calculoAumento('D', 20, 1200);
