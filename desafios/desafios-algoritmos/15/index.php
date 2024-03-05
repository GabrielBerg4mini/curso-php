<?php
print "<h2>Um homem decidiu ir à uma revenda comprar um carro. Ele deseja comprar um carro hatch, e a revenda
possui, além de carros hatch, sedans, motocicletas e caminhonetes. Utilizando uma estrutura switch, caso o
comprador queira o hatch, retorne: “Compra efetuada com sucesso”. Nas outras opções, retorne: “Tem certeza
que não prefere este modelo?”. Caso seja especificado um modelo que não está disponível, retorne no console:
“Não trabalhamos com este tipo de automóvel aqui”.
</h2><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>

function escolhaAutomovel($escolha)
{
    switch ($escolha) {
        case 'carros hatch':
            print 'Compra efetuada com suceeso. <br>';
            break;
        case 'carros sedans':
            print 'Tem certeza que não prefere este modelo? <br>';
            break;
        case 'motocicletas':
            print 'Tem certeza que não prefere este modelo? <br>';
            break;
        case 'caminhonetes':
            print 'Tem certeza que não prefere este modelo? <br>';
            break;
        default:
            print 'Não trabalhamos com esses modelos de automoveis.';
    }
}

escolhaAutomovel('carros hatch');
escolhaAutomovel('carros sedans');
escolhaAutomovel('motocicletas');
escolhaAutomovel('caminhonetes');
escolhaAutomovel('caminhão');
