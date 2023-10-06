<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão PHP</title>
    <style>
        html{
            background-color: lightblue;
        }
        *{
            font-size: 1.2rem;
            padding: 0px;
            margin: 0px;
            font-family:Arial, Helvetica, sans-serif
        }
        td{
            font-size: 3.0rem;
            padding: 20px;
        }
        #td_resultado{
        border-top:    3px solid black;
        border-right:  none;
        border-bottom: none;
        border-left:   3px solid  black;
        }
        #td_divisor{
        border-top:    none;
        border-right:  none;
        border-bottom: 3px solid black;
        border-left:   3px solid black;
        }
        #entrada{
            margin: 30px auto;
            width: 400px;
            text-align: center;
            background-color: white;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 3px 1px 5px black;
        }
        #entrada > input{
            text-align: center;
        }
        input{
            margin: 5px auto;
            text-align: center;
            border-radius: 10px;
            width: 40%;

        }
        #saida{
            margin: auto;
            width: 400px;
            text-align: center;
            background-color: white;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 3px 1px 5px black;
        }
        #saida > table{
            margin: 10px auto;
            width: 300px;
            background-color: lightgrey;
            border-radius: 10px;
            box-shadow: 2px 2px 5px black;

        }
    </style>
</head>
<body>
    <div id="entrada">
    <h1>Anatomia de uma Divisão</h1>
    <?php 
    $dividendo = $_POST["dividendo"] ?? 10;
    $divisor = $_POST["divisor"] ?? 5;$ponto_flutuante = $_POST["ponto_flutuante"] ?? 1;
    $resultado = round($dividendo / $divisor, $ponto_flutuante) ?? 2;
    
    $resto = $dividendo%2 ?? 0;
    
    ?>

    <form action="<?php echo"$_SERVER[PHP_SELF]"?>" method="post">

    <label for="dividendo"><p>Dividendo</p></label>
    <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>" placeholder="Digite o valor">
    <br>
    <label for="divisor"><p>Divisor</p></label>
    <input type="number" name="divisor" id="divisor" value="<?= $divisor?>" placeholder="Digite o valor">
    <br>
    <label for=""><p>Quantidade de números após o ponto</p></label>
    <input type="number" name="ponto_flutuante" id="ponto_flutuante" value="<?= $ponto_flutuante?>">
    <br>
    <input type="submit" value="Calcular">
    </form>
    </div>
    <div id="saida">
        <h1>Estrutura da Divisão</h1>
        <table>
            <tr >
                <td style="border: none;"><?=$dividendo?></td>
                <td id="td_divisor"><?=$divisor?></td>
            </tr>
            <tr>
                <td style="border: none";><?=$resto?></td>
                <td id="td_resultado" style=";"><?=$resultado?></td>
            </tr>
        </table>
    </div>
</body>
</html>