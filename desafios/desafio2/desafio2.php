<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Aleatórios</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        body{
            background-color: lightcyan;

        }
        div{
            background-color: white;
            width: 60vw;
            padding: 10px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 2px 2px 4px black;
        }
        p,input{
            font-size:1.3rem ;
        }
        input{
            background-color: lightskyblue;
            border: none;
            font-size:1.5rem ;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 2px 2px 4px black;
        }
        input:hover{
            cursor:pointer;
        }

    </style>
</head>
<body>
    <h1>Gerador de Números Aleatórios</h1>
    <div>
    <p>Clique no botão abaixo para gerar um número aleatorio de 0 a 100</p>
    <?php 
    $numero = rand(0, 100);

    echo "<p>O valor gerado foi <b> $numero</b></p>";
    ?>
    <form action="desafio2.php">
    <input type="submit" value="Gerar Número 🔎">
    </form>
    </div>
    
</body>
</html>