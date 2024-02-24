<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="style.css" />

  <title>Divisor e Dividendo</title>
</head>

<body>
  <?php
  $dividendo = $_REQUEST['dividendo'] ?? 0;
  $divisor = $_REQUEST['divisor'] ?? 1;
  ?>

  <main>
    <h1>Anatomia de uma Divisão</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="dividendo">Dividendo</label>
      <input type="number" name="dividendo" id="1" step="0.001" min="0" value="<?= $dividendo ?>" />
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" id="2" step="0.001" min="1" value="<?= $divisor ?>" />
      <input type="submit" value="Analisar" />
    </form>
  </main>

  <section>
    <h1>Estrutura da Divisão</h1>
    <?php

    $divisao = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    ?>

    <table class="divisao">
      <tr>
        <td><?= $dividendo ?></td>
        <td><?= $divisor ?></td>
      </tr>
      <tr>
        <td><?= $resto ?></td>
        <td><?= $divisao ?></td>
      </tr>
    </table>

  </section>

</body>

</html>