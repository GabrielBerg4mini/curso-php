<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 11</title>
</head>

<body>
    <?php
    $precoDoProduto = $_REQUEST['preco'] ?? "0";
    $porcentual = $_REQUEST['reaj'] ?? "0";
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Prelo do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?= $precoDoProduto ?>">
            <label for="reaj">Qual será o porcentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" " name=" reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $porcentual ?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>

        <?php
        $precoFormatado = numfmt_create("PT-BR", numberFormatter::CURRENCY);
        $valorFinal = ($porcentual * $precoDoProduto / 100) + $precoDoProduto;

        ?>
        <p>O produto que custava <?= numfmt_format_currency($precoFormatado, $precoDoProduto, "BRL")  ?>, com <strong><?= $porcentual ?>% de aumento</strong> vai passar a custar <strong><?= numfmt_format_currency($precoFormatado, $valorFinal, "BRL") ?></strong> a partir de agora. </p>
    </section>

    <script>
        function mudaValor() {
            p.innerHTML = reaj.value;
        }
        mudaValor()
    </script>
</body>

</html>