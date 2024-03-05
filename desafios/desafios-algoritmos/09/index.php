<?php

use function PHPSTORM_META\registerArgumentsSet;

print "<h2>Construa uma função para um sistema de notas de uma instituição que possui a seguinte política de
    classificação: Todo aluno recebe uma nota de 0 a 100. Alunos com nota abaixo de 40 são reprovados. As notas
    possuem a seguinte regra de arredondamento: Se a diferença entre a nota e o próximo múltiplo de 5 for menor
    que 3, arredondar a nota para esse próximo múltiplo de 5. Se a nota for abaixo de 38, não é feito nenhum
    arredondamento pois esta nota resulta na reprovação do aluno. Por exemplo, a nota 84 será arredondada para
    85, mas a nota 29 não será arredondada por ser abaixo de 40 e não ser possível arredondamento eficiente, ou
    seja, que evite a reprovação do aluno. No caso de a nota ser 38, o arredondamento é possível pois atingirá 40
    e o aluno será aprovado.</h2><br><br><br><br><br>";


//função sistema de notas

function VerificarNotas($notaDoAluno)
{
    //Atualizando a nota do aluno
    $notaArredondada = regraArredondamento($notaDoAluno);
    //Condição para reprovado
    if ($notaArredondada >= 40) {
        print "Aprovado com nota: $notaArredondada <br>";
    } else {

        print "Reprovado com nota: $notaArredondada, foi abaixo de 40. <br>";
    }
}

//Regra para o arredondamento
function regraArredondamento($notaDoAluno)
{
    if ($notaDoAluno % 5 > 2) {
        return $notaDoAluno + (5 - ($notaDoAluno % 5));
    } else {
        return $notaDoAluno;
    }
    return;
};

VerificarNotas(100);
VerificarNotas(30);
VerificarNotas(38);
VerificarNotas(88);
VerificarNotas(61);
