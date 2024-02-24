<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 01</title>
</head>

<body>
    <main>
        <section>

            <h1>Resultado Final</h1>



            <p>
                <?php
                $numeroDigitado = $_REQUEST['number'] ?? 0;
                $numeroAntecessor = $numeroDigitado - 1;
                $numeroSucessor = $numeroDigitado + 1;

                echo "O número escolhido foi <strong>$numeroDigitado</strong>. <br>";
                echo "O número <em>antecessor</em> é $numeroAntecessor. <br>";
                echo "O número <em>sucessor</em> é $numeroSucessor. ";
                ?>
            </p>

            <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
        </section>
    </main>
</body>

</html>