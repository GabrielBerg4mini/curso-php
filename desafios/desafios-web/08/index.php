<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 08</title>
</head>

<body>

    <?php
    $numeroDigitado = $_REQUEST['number'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="number">Número</label>
            <input type="number" name="number" id="n" value="<?= $numeroDigitado ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h1>Resultado final</h1>

        <?php

        $valorRaizQuadrada = sqrt($numeroDigitado);
        $valorRaizCubica = $numeroDigitado ** (1 / 3);

        print "<p>Analisando o <strong>número $numeroDigitado,</strong> temos:</p>";
        print "<ul> <li>A sua raiz quadrada é <strong>" . number_format($valorRaizQuadrada, 3, ',', '.') . "</strong></li>";
        print "<li>A sua raiz cúbica é <strong>" . number_format($valorRaizCubica, 3, ',', '.') . "</strong></li></ul>";
        ?>
    </section>
</body>

</html>