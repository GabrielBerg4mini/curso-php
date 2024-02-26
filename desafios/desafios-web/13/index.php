<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="styleSheet" href="style.css">

    <title>Desafio 13</title>


    <style>
        img.nota {
            height: 5.5rem;
            margin: 1rem 1rem 0 0;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        ul li {
            display: flex;
            align-items: center;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <?php
    $valorDigitado = $_REQUEST['dinheiro'] ?? 0;
    $resto = $valorDigitado;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dinheiro">Qual valor você deseja sacar?(R$)*</label>
            <input type="number" name="dinheiro" id="dinheiro" value="<?= $valorDigitado ?>" required>
            <p>*Notas disponíveis: <strong>R$100, R$50, R$10 e R$5</strong></p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>

        <?php
        $notasDe100 = floor($resto / 100);
        $resto %= 100;
        $notasDe50 = floor($resto / 50);
        $resto %= 50;
        $notasDe20 = floor($resto / 20);
        $resto %= 20;
        $notasDe10 = floor($resto / 10);
        $resto %= 10;
        $notasDe5 = floor($resto / 5);
        $resto %= 5;
        ?>

        <h2>Saque de R$<?= number_format($valorDigitado, 2, ',', '.') ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li> <img class="nota" src="./assets/100reais.jpg" alt="nota de 100">x<?= $notasDe100 ?></li>
            <li><img class="nota" src="./assets/50reais.jpg" alt="nota de 50">x <?= $notasDe50 ?></li>
            <li><img class="nota" src="./assets/20reais.jpg" alt="nota de 20">x <?= $notasDe20 ?></li>
            <li><img class="nota" src="./assets/10reais.jpg" alt="nota de 10">x <?= $notasDe10 ?></li>
            <li><img class="nota" src="./assets/5reais.jpg" alt="nota de 5">x <?= $notasDe5 ?></li>
            <li><img class="nota" src="./assets/1real.jpg" alt="Moeda de 1">x <?= $resto ?></li>
        </ul>


    </section>
</body>

</html>