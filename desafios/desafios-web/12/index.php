<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 12</title>
</head>

<body>

    <?php
    $segundosDigitado = $_REQUEST['segundos'] ?? 0;
    $sobra = $segundosDigitado;
    ?>

    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos ?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundosDigitado ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php
        $semanas = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;
        $dias = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;
        $horas = (int)($sobra / 3_600);
        $sobra = $sobra %  3_600;
        $minutos = (int) ($sobra / 60);
        $sobra = $sobra % 60;
        $segundos = $sobra;


        ?>

        <h2>Totalizando tudo</h2>

        <p>Analisando o valor que você digitou, <strong><?= number_format($segundosDigitado, 0, ',', '.') ?> segundos</strong> equivalem a um total de:</p>

        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
        </ul>
    </section>
</body>

</html>