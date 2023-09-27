<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php 

$nome = $_GET["nome"] /*Operador de coalescência nula*/ ?? 'sem nome';
$sobrenome = $_GET["sobrenome"] ?? "desconhecido";

echo "É um prazer te conhecer $nome $sobrenome";

?>

</body>
</html>




