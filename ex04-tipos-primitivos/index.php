<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>

    <?php
    //0x = hexadecimal 0b = binári 0 = octal
    // $num = 0x1A;
    // echo "o valor da variável é $num";

    // $v = "gustavo";
    // var_dump($v); // mostra o valor primitivo

    // $num = (int) 3e2; //3 x 10^2 == 300 //coerção (int)
    // // echo "O valor é $num";
    // var_dump($num) // mostra o valor primitivo

    // $num = (int) "960";
    // var_dump($num);

    // $casado = false; // mandar escreve na tela uma variável booleana,
    //se for true será mostrado 1, se for falso será vazio
    // var_dump($casado);
    // echo " O valor para casado é $casado "

    // $vet = [6, false, 3.2, 5, "Maria"];
    // var_dump($vet);

    class Pessoa
    {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    ?>
</body>

</html>