<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Desafio 05</title>
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
        $number = $_REQUEST['number'] ?? 0;

        echo "<p>Analisando o <strong>" . number_format($number, 3, ",", ".") . "</strong> informado pelo usuário: </p>";

        $int = (int) $number;
        $fra = $number - $int;

        echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
        echo "<li>A parte fracionária do número é <strong>" . number_format($fra, 3, ',', '.') . "</strong></li></ul>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>