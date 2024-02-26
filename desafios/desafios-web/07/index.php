<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 07</title>
</head>

<body>

    <?php
    $salario = $_REQUEST['salario'] ?? 0;
    $salarioMinimo = 1412;
    $salarioFormatado = numfmt_create("PT-BR", numberFormatter::CURRENCY);

    ?>

    <main>
        <h1>Informe seu salário</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario"><strong>Salário (R$)</strong></label>
            <input type="number" name="salario" id="s1" step="0.01" value="<?= $salario ?>">
            <p>Considerando o salário mínimo de <strong><?= numfmt_format_currency($salarioFormatado, $salarioMinimo, 'BRL') ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>
        <?php
        $divisao = intdiv($salario, $salarioMinimo);
        $resto = $salario % $salarioMinimo;

        print "<p>Quem recebe um salário de " . numfmt_format_currency($salarioFormatado, $salario,  'BRL') . " ganha <strong>" . $divisao . " salário mínimo + </strong>" . numfmt_format_currency($salarioFormatado, $resto, 'BRL') . "</p>";
        ?>
    </section>
</body>

</html>