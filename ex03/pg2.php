<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Strings no PHP</title>
</head>
<body>
    <h1>Tipos de STRINGS em PHP</h1>
    <h2>Com variaveis:</h2>

    <div style="width: 90vw; display:inline-flex; justify-content:space-around; ">

        <?php 
            $nome = "Gustavo";
            $sobrenome="Guanabara";

            echo "$nome $sobrenome \u{2705}";
            echo '<br>';
            echo "$nome $sobrenome \u{2705}";
            echo '<br>';
            $sobrenome = 'Guanabara \u{2705}';
            echo "$nome $sobrenome";
        ?>

        <img src="img/pg2-cod1.jpg" alt="Código da saida ao lado">

    </div>

    <p style="text-align: center;">Entre aspas <mark>duplas</mark> o PHP <mark>interpreta</mark> oque está dentro delas</p>
    <p style="text-align: center;">Entre aspas <mark>simples</mark> o PHP <mark>NÃO</mark> interpreta oque está dentro delas</p>

    <!--Com Variaveis-->
    <h2>Com Constantes</h2>
    <div style="width: 90vw; display:inline-flex; justify-content:space-around; ">

        <?php 
            const ESTADO = "RJ";
            echo "Eu moro no estado do ESTADO"; 
            //Não funciona

            echo "<br>";
            print "Eu moro no estado do " . ESTADO;
        ?>

        <img src="img/pg2-cod2.jpg" alt="Código da saida ao lado">
    </div>
    <p style="text-align: center;">Constante somente com <mark>CONCATENAÇÃO</mark></p>



</body>
</html>




