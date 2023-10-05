<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Numero Real</title>
</head>
<body>
    <h1>Analizador de Números Reais</h1>
    <form action="analizar.php" method="get">
    <label for="num">Qual valor?</label>
    <input type="number" id="num" name="num"  min="0" step="0.001" placeholder="Digite aqui" required>
    <input type="submit" value="Analizar">
    </form>
    
</body>
</html>