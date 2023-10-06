<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <style>
        body{
            width:80vw;
            margin:auto;
            background-color: lightpink;
            
            text-align: center;
        }
        form{
            margin: 30px auto;
            width:50%;
            background-color: white;
            color: black;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 1px 3px 5px black;

        }
        input{
            padding: 10px;
            margin: 10px;
        }
        #resultado{
            margin: 30px auto;
            width:50%;
            background-color: white;
            color: black;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 1px 3px 5px black;

        }
    </style>
</head>
<body>
    <h1>Antecessor e Sucessor</h1>
    <form action="desafio1.php" method="get">
        <label for="numero">Numero </label>
        <input type="number" name="numero" id="numero" placeholder="Digite um número">
        <br>
        <input type="submit" placeholder="Enviar">
    </form>
    <div id="resultado">
        <?php 
            if ($_SERVER["REQUEST_METHOD"] === "GET") {
                $numero = $_GET["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
        
                echo "<p> O <strong>número</strong> digitado foi <strong>$numero</strong>" ;
                echo "<p> O seu <strong>antecessor</strong> é <strong>$antecessor</strong> </p>" ;
                echo "<p> O seu <strong>sucessor</strong> é   <strong>$sucessor</strong> </p>"  ;
            }
        ?>
    </div>
</body>
</html>