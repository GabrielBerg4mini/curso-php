<?php
print "<h2>Crie uma função que verifica se um número inteiro passado como parêmetro é divisível por 3 e retorne true
ou false.
</h2><br> <br> <br> <br> <br>"; //<h2></h2><br> <br> <br> <br> <br>

//função para verificar se é divisível por 3
function DivisivelPorTres($numero)
{
    //variavel com a validação
    $divisivel = (int)$numero % 3 === 0;

    //condição se for true
    if ($divisivel) {
        print "O $numero é divisível por 3, então é True(verdadeiro)<br>";
    } //condição se for false 
    else {
        print "O $numero não é divisível por 3, estão é False(falso)<br>";
    }
}

DivisivelPorTres(12);
DivisivelPorTres(7);
