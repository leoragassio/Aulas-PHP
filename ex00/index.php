<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiros códigos em php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    $h1c = "<h1>";
    $h1f = "</h1>";

    
    echo "$h1c Olá, Mundo! \u{1F30E} $h1f";

    echo " <p>O servidor usado é " . $_SERVER['SERVER_ADMIN'] . "</p> ";
    
    
    ?>
    <p>Livrando da maldição </p>
    
</body>
<footer>
    
    <?php
    echo "<p>A versão do php usado está sendo: " . phpversion() . "</p>";
    
    ?>
</footer>
</html>

