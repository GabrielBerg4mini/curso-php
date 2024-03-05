<?php
print "<h4>Pedro joga N jogos de basquete por temporada. Para saber como está ele está progredindo, ele mantém
registro de todos as pontuações feitas por jogo. Após cada jogo ele anota um novo valor e confere se o
mesmo é maior ou menor que seu melhor e pior desempenho. Dada uma lista string = “pontuação1 pontuação2
pontuação3 etc..”, escreva uma função que ao recebê-la irá comparar os valores um a um e irá retornar um
vetor com o número de vezes que ele bateu seu recorde de maior número de pontos e quando fez seu pior
jogo. (Número do pior jogo).
Obs.: O primeiro jogo não conta como novo recorde do melhor.
Exemplo:
String: “10 20 20 8 25 3 0 30 1”
Retorno: [3, 7] (Significa que ele bateu três vezes seu recorde de melhor pontuação e a pior pontuação
aconteceu no sétimo jogo.)
</h4><br> <br> <br> <br> <br>";


function VerificarPontuacao($pontuacaoPorJogo)
{
    //dividir a string em um array de pontuações
    $pontuacoesArray = explode(' ', $pontuacaoPorJogo);

    //Inicializar variáveis para o máximo e mínimo
    $maxPontuacoes = $pontuacoesArray[0];
    $minPontuacoes = $pontuacoesArray[0];

    //Inicializar contadores
    $recordesBatidos = 0;
    $piorJogo = 0;

    //Percorrer as pontuações
    for ($i = 1; $i < count($pontuacoesArray); $i++) {
        //Comparar com a pontuação máxima
        if ($pontuacoesArray[$i] > $maxPontuacoes) {
            $maxPontuacoes = $pontuacoesArray[$i];
            //Se o recorder foi batido, incrementar o contador
            $recordesBatidos++;
        }
        //Comparar com a pontuação mínima 
        if ($pontuacoesArray[$i] < $minPontuacoes) {
            $minPontuacoes = $pontuacoesArray[$i];
            //Registrar o indice do pior jogo
            $piorJogo = $i + 1;
        }
    }
    //retorna o resultado como um array
    return array($recordesBatidos, $piorJogo);
}
//String de ex.
$pontuacaoPorJogo = '10 20 20 8 25 3 2 30 1';

//Chamar a função e imprimir o resultado
$valorNaTela = VerificarPontuacao($pontuacaoPorJogo);

print "Os valores são: [" . $valorNaTela[0] . ", " . $valorNaTela[1]  . "]";
