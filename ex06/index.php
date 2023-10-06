<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Retroalimentados</title>
</head>
<body>
    <main>
    <?php 
    //Capturando os dados do Formulario retroalimentado
    $valor1 = $_POST['valor1'] ?? "0";
    $valor2 = $_POST['valor2'] ?? "0";
    ?> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">

    <label for="valor1">Valor 1</label>
    <input type="number" name="valor1" id="valor1" placeholder="Digite o valor 1:" value="<?= $valor1?>" required>

    <label for="valor2">Valor 2</label>
    <input type="number" name="valor2" id="valor2" placeholder="Digite o valor 2: "value="<?= $valor2?>" required>

    <input type="submit" value="Enviar">
    </form>
    <?php 
    $soma = $valor1 + $valor2;
    echo "A soma dos Valores foi: $soma";
    ?>
    </main>
</body>
</html>