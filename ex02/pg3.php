<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de regras a variaveis e constantes</title>
</head>
<body>
    <h1>Exemplos de regras e recomendações a variaveis e constantes</h1>
    <?php 
        $nome = "Pedro";
        echo "É verdade que seu nome é $nome? <br>";

        $salario = 2500.75;
        echo "$nome, seu salario é de R$$salario";

        $nomeCompletoCliente = "Camel Case";
        $telefone_contato_fornecedor = "SNAKE_CASE";

        echo "<p>". $nomeCompletoCliente . "</p>" .  "<p>".  $telefone_contato_fornecedor . "</p>"
    ?>
</body>
</html>