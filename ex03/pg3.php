<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspas Duplas e simples na mesma string</title>
</head>
<body>
    <h2>Aspas Duplas e simples na mesma string</h2>

    
    <img src="img/pg3-cod1jpg.jpg" alt="">
    <p>Saida:</p>
    <?php 
        $nome = "Rodrigo";
        $sobrenome = "Nogueira";
        echo $nome . ' "Minotauro" ' . $sobrenome . "<br>";
    ?>
    <h3>Ou:</h3>
    <img src="img/pg3-cod2.jpg" alt="">
    <p>Saida:</p>
    <?php 
    echo "$nome \"Minotauro\" $sobrenome";
    
    ?>
    <h2>Sequencia de Escapes:</h2>
    <p>\n : Nova Linha</p>
    <p>\t : Tabulação horizontal</p>
    <p>\\ : Barra invertida</p>
    <p>\$ : Sinal de cifrão  (por conta das variaveis começarem com $)</p>
    <p>\u{} : Codepoint Unicode (Emojis)</p>
</body>
</html>