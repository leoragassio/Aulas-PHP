<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02 - PHP</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "<p>Hoje é dia: " . date("d/m/y") . "</p>";
        echo "<p>E a hora atual é: " . date("G:i:s T") . "</p>";
    ?>
</body>
</html>