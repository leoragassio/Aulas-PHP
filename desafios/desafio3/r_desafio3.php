<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de Moedas v1.0</h1>
    <?php 
        $quantidade = $_GET["quantidade"];
        $dolar = "5.06";
        $resultado = ($quantidade / $dolar) ;
        $padrão = numfmt_create("ru_RU",NumberFormatter::CURRENCY);

        print "<p>" . numfmt_format_currency($padrão,$quantidade, "BRL") . " equivalem a " . numfmt_format_currency($padrão,$resultado, "USD")  . "</p>";
        //echo "<p>Seus R$" . number_format($quantidade,2 , "," , ".") . " equivalem a $" . number_format($resultado,2 , "," , ".") . " </p>";
    ?>
    <a href="./desafio3.php">Voltar</a>
</body>
</html>