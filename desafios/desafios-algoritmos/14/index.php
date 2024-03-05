<?php

print "<h2>Crie uma estrutura condicional switch que receba uma string com o nome de uma fruta e que possua três
casos: Caso maçã, retorne no console: “Não vendemos esta fruta aqui”. Caso kiwi, retorne: “Estamos com
escassez de kiwis”. Caso melancia, retorne: “Aqui está, são 3 reais o quilo”. Teste com estas três opções .Crie
também um default, que retornará uma mensagem de erro no console.</h2><br> <br> <br> <br> <br>"; // <h2></h2><br> <br> <br> <br> <br>

print '<h4>Frutas escolhidas: Maça,Kiwi e Melancia. Valor que foi usado para retornar o default: Carne.<h5> <br><br>';

function verificarFrutas($fruta)
{

    switch ($fruta) {
        case 'maçã':
            print 'Não vendemos ' . $fruta . ' aqui.<br><br>';
            break;
        case 'kiwi':
            print 'Estamos com escassez de ' . $fruta . '.<br><br>';
            break;
        case 'melancia':
            print 'Aqui está, são 3 reais o quilo da ' . $fruta . '.<br> <br>';
            break;
        default:
            print 'Não pussímos isso aqui no estabelecimento. <br>';
            break;
    }
}


verificarFrutas('maçã');
verificarFrutas('kiwi');
verificarFrutas('melancia');
verificarFrutas('carne');
