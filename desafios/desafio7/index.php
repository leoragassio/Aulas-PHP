<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada e Cubica - PHP</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif ;
        }
    </style>
</head>
<body>
    <h1>CALCULAR RAIZ QUADRADA E RAIZ CÚBICA</h1>
    <h2>Informe um número</h2>
    <?php 
    $num = $_GET["num"] ?? 64;
    $raiz_qd = round(sqrt($num),3) ?? 8;
    $raiz_cub = round(pow($num,1.0/3.0),3)?? 4;
    ?>
    <form action="<?=$_SERVER["PHP_SELF"]?>">
    <label for="num">Digite o Valor</label>
    <input type="number" name="num" id="num" min="0" placeholder="Digite o valor" value="<?=$num?>" required>
    <input type="submit" value="Calcular">
    </form>
    <h2>Resultado</h2>
    <?php 
    echo "<p>A raiz quadrada de $num é :$raiz_qd<p>";
    echo "<p>A raiz cúbica de $num é :$raiz_cub<p>";
    ?>
</body>
</html>