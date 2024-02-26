<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 09</title>
</head>

<body>
    <?php
    $primeiroValor = $_REQUEST['valor1'] ?? 0;
    $segundoValor = $_REQUEST['valor2'] ?? 0;
    $primeiroPeso = $_REQUEST['peso1'] ?? 1;
    $segundoPeso = $_REQUEST['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="v1" value="<?= $primeiroValor ?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="p1" value="<?= $primeiroPeso ?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="v2" value="<?= $segundoValor ?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="p2" value="<?= $segundoPeso ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php
        $calculoSimples = ($primeiroValor + $segundoValor)  / 2;
        $calculoPonderada = ($primeiroValor * $primeiroPeso + $segundoValor * $segundoPeso) / ($primeiroPeso + $segundoPeso);


        print "<p>Analisando os valores <strong>$primeiroValor</strong> e <strong>$segundoValor</strong>:</p>";
        print "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>" . number_format($calculoSimples, 2, ',', '.') . "</strong></li>";
        print "<li>A <strong>Média Aritmética Ponderada</strong> com pesos <strong>$primeiroPeso</strong> e <strong>$segundoPeso</strong> <strong>" . number_format($calculoPonderada, 2, ',', '.') . "</strong></li></ul>";
        ?>
    </section>
</body>

</html>