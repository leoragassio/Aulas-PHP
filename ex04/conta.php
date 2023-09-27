<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritmeticas com PHP</title>
</head>
<body>
<img src="img/cod1.jpg" alt="">
<br>
<?php
$res = 5 + 2 / 2;
echo $res;

echo "<h2>Explicação</h2>";
echo "5 + <mark>2 / 2</mark> = <br>";
echo "<mark>5 + 1</mark> = <br>";
echo "$res";
?>
<h2>Ordem de precedencia:</h2>
<p>( ) - Parenteses quebra a ordem de precedencia a seguir tendo assim uma prioridade maior </p>

<p>1º ** (Potencia)</p>
<p>2º *(Multiplicação)    /(Divisão)   %(Resto da Divisão)</p>
<p>3º + (Adição) - (Subtração)</p>



</body>
</html>




