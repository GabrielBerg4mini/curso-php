<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 03</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php
        $reais =  $_REQUEST['valor'] ?? 0;
        $cotacao = 4.99;

        $dolar =  $reais /  $cotacao;
        // Minha forma.
        // $money_format = number_format($dolar, 2, ',', '.');
        // echo "<p>Seus R\$ $reais equivale a <strong>US\$ $money_format</strong></p>";
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>