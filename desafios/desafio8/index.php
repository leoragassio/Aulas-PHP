<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            margin:auto;
            padding: 0px;
            text-align: center;
        }
        body{
            background-color: lightblue;
        }
        div{
            text-align: center;
            margin: auto;
            display: flex;
            flex-direction: column;
        }
        label{
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        input{
            width: 50%;
            display: flex;
            flex-direction: column;
            text-align: center;
            margin: 5px auto;
        }
        p{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div>
    <?php 
    $num1 = $_GET["num1"] ?? 10;
    $num2 = $_GET["num2"]  ?? 10;
    $peso1 = $_GET["peso1"] ?? 10;
    $peso2 = $_GET["peso2"] ?? 10;

    $pond1 = $num1*$peso1+$num2*$peso2;
    $pond2 = $peso1+$peso2;
    //Média Aritimetica
    $media_ari = ($num1+$num2)/2;
    //Média Aritimetica Ponderada
    $media_pond = $pond1 / $pond2;
    ?>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
    <label for="num1">Valor 1</label>
    <input type="number" name="num1" id="num1" step="0.1" placeholder="Digite o valor" value="<?=$num1?>" required>

    <label for="peso1">Peso 1</label>
    <input type="number" name="peso1" id="peso1" placeholder="Digite o valor" value="<?=$peso1?>" required>

    <label for="num2">Valor 2</label>
    <input type="number" name="num2" id="num2" step="0.1"placeholder="Digite o valor" value="<?=$num2?>" required>

    <label for="peso2">Peso 2</label>
    <input type="number" name="peso2" id="peso2" placeholder="Digite o valor" value="<?=$peso2?>" required>

    <input type="submit" value="Calcular">
    </form>
    </div>
    <?php 
    echo "<p>Analizando os valores de $num1 e $num2:</p>";
    echo "<p><strong>A media aritimetica é:</strong>" . round($media_ari)."<p>";
    echo "<p>A<strong> media ponderada é:</strong>" . round($media_pond,2) . "<p>"; 
    ?>

</body>
</html>