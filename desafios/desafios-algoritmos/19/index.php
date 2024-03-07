<?php
print '<h2>O cardápio de uma lanchonete é o seguinte:<br>
--------------------------------------   <br>
|Código| Descrição do Produto| Preço |   <br>
--------------------------------------   <br>
| 100 |  Cachorro Quente   | R$ 3,00 |   <br>
| 200 | Hambúrguer Simples | R$ 4,00 |   <br>
| 300 |   Cheeseburguer    | R$ 5,50 |   <br>
| 400 |      Bauru         | R$ 7,50 |   <br>
| 500 |   Refrigerante     | R$ 3,50 |   <br>
| 600 |       Suco         | R$ 2,80 |   <br>
Implemente uma função que receba como parâmetros o código do item pedido, a quantidade e calcule o valor
a ser pago por aquele lanche. Considere que a cada execução somente será calculado um item. Use o
comando switch. Crie um caso default para produto não existente.</h2><br> <br> <br> <br> <br>'; //<h2></h2><br> <br> <br> <br> <br>

print "Quantidade de cada produto: 4unid. <br><br>";

function alimentoPedido($codigoAlimento, $quantidade)
{
    switch ($codigoAlimento) {
        case '100':
            $total = $quantidade * 3.00;
            print "O total de $quantidade  Cachorro Quente é igual a: $total. <br>";
            break;
        case '200':
            $total = $quantidade * 4.00;
            print "O total de $quantidade  Hambúrguer Simples é igual a: $total. <br>";
            break;
        case '300':
            $total = $quantidade * 5.50;
            print "O total de $quantidade Cheeseburguer é igual a: $total. <br>";
            break;
        case '400':
            $total = $quantidade * 7.50;
            print "O total de $quantidade Bauru é igual a: $total. <br>";
            break;
        case '500':
            $total = $quantidade * 3.50;
            print "O total de $quantidade Refrigerante é igual a: $total. <br>";
            break;
        case '600':
            $total = $quantidade * 2.80;
            print "O total de $quantidade Suco é igual a: $total. <br>";
            break;
        default:
            print 'Item não cadastrado no sistemas.';
    }
}

alimentoPedido('100', 4);
alimentoPedido('200', 4);
alimentoPedido('300', 4);
alimentoPedido('400', 4);
alimentoPedido('500', 4);
alimentoPedido('600', 4);
alimentoPedido('700', 4);
