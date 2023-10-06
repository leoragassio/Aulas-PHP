<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado!</title>
</head>
<body>
    <?php 
    $num = $_GET["num"];
    echo "<p>O valor foi <strong>" . number_format($num,3,",",".") . "<strong> </p>";
    $inteiro = (int)$num;
    $fracionario = $num - $inteiro;
    echo '<ul><li> O número inteiro é: <strong>' . number_format($inteiro, 0, ",", ".") . '</strong></li>' ;
    echo "<li>O número fracionario é: <strong>" . number_format($fracionario,+3, ",", ".") . "</strong></li> </ul>"
    ?>
</body>
</html>