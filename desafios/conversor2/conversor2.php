<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Conversor de moedas</h1>
    <form action="r_conversor2.php" method="get">
        <label for="quantidade">Valor em R$</label>
        <input type="number" name="quantidade" id="quantidade" min="0" step="0.01" placeholder="Digite a quantidade" required>
        <input type="submit" value="Converter">
    </form>

</body>
</html>