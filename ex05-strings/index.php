<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <?php
    $nome1 = "Gustavo";
    $sobrenome1 = "Guanabara";

    echo "Olá $nome1 $sobrenome1 \u{1F418}, "; //res: Olá Gustavo Guanabara 🐘, houve interpretação usando as aspas duplas.

    echo 'Olá $nome1 $sobrenome1 \u{1F418}'; //res: Olá $nome $sobrenome, não houve interpretação, apenas mostrou como foi escrito na string.

    const CANAL = "Curso em Video \u{1f499}";
    echo "Eu adoro o " . CANAL;


    $ano = date('Y');

    echo "Estamo no ano de $ano, ";
    echo "Estamos no ano de " . date('Y') . ", ";


    $nome2 = "Rodrigo";
    $snom = "Nogueira";

    // echo "$nome "Minotauro" $snom "; OBS:error
    echo '$nome2 "Minotauro" $snom, ';
    echo "$nome2 \"Minotauro\" $snom, "; //"Sequência de Escape para usar uma string junto com a interpetração"
    echo "$nome2 'Minotauro' $snom, ";
    echo 'Teste \'Minotauro\' Aspas simples ';

    $nome3 = "Gabriel";
    $sobrenome3 = "Bergamini";
    $apelido = "Monstro";

    echo "$nome3 $apelido $sobrenome3, ";
    echo "$nome3 '$apelido' $sobrenome3, ";
    echo "$nome3 \t\t \"$apelido\" \t\t $sobrenome3"; //não funcionou, olhar depois caso precise. Precisa usar o <br> caso use HTML.


    $curso = "PHP";
    $ano = date('Y');

    echo <<< FRASE
        Estou estudando
            $curso em $ano
    FRASE;

    echo <<< TESTE
        Olá Galera do $curso
            Tudo certo com vocês ?
        Chega mais
    TESTE;


    echo <<< 'TESTE'
        estou estudando 
            $curso em $ano
    TESTE;

    ?>
</body>

</html>