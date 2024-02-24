<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 10</title>
</head>

<body>
    <?php
    $anoAtual = date("Y");
    $anoDeNascimento = $_REQUEST['nascimento'] ?? 2000;
    $anoEscolhido = $_REQUEST['ano-escolhido'] ?? $anoAtual;
    ?>


    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nascimento">Em que ano você nasceu ?</label>
            <input type="number" name="nascimento" min="1900" max="<?= $anoAtual ?>" value="<?= $anoDeNascimento ?>">
            <label for="ano-escolhido">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $anoAtual ?></strong>)</label>
            <input type="number" name="ano-escolhido" value="<?= $anoEscolhido ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>

        <h2>Resultado</h2>


        <?php
        if ($anoEscolhido < $anoDeNascimento) {
            print "<p>O <strong>ano escolhido</strong> tem que ser maior do que o ano em que você <strong>nasceu!</strong></p>";
        } else {
            $resultadoIdade = $anoEscolhido - $anoDeNascimento;
            if ($resultadoIdade === 1) {
                print "<p>Quem nasceu em $anoDeNascimento vai ter <strong>$resultadoIdade ano</strong> em $anoEscolhido</p>";
            } else {
                print "<p>Quem nasceu em $anoDeNascimento vai ter <strong>$resultadoIdade anos</strong> em $anoEscolhido</p>";
            }
        }
        ?>

    </section>
</body>

</html>