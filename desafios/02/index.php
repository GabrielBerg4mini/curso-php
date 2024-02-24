<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 2</title>
</head>

<body>
    <main>
        <section>
            <h1>Trabalhando com número aleatórios</h1>




            <?php
            $min = 0;
            $max = 100;

            echo "<p>Gerando um número aleatório entre $min e $max...</p>";


            $resultado = mt_rand($min, $max);
            echo "<p>Número gerado é <strong>$resultado</strong>.</p>";

            ?>

            <button type='button' name="submit" onclick="javascript:document.location.reload()">🔁Gerar outro</button>


        </section>
    </main>
</body>

</html>