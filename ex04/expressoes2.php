<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritmeticas com PHP</title>
    <style>
        *{
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <h1>Funções Aritmeticas no PHP</h1>
    <hr>
    <p>Função de Numero Absoluto</p>
    <p>abs( <mark>valor aqui dentro</mark> )</p>
    <img src="img/exp-cod2.jpg" alt="">
    <?php 
        $r = abs(-2000);
        print "<p>A resposta é $r</p>";
    ?>
    <hr>
    <p>Conversão de números com bases diferentes: </p>
    <p>base_convert( <mark>valor aqui dentro</mark> )</p>
    <img src="img/exp-cod3.jpg" alt="">
    <?php 
        $valor = base_convert(254, 10, 8);
        print "<p>A resposta é $valor</p>";
    ?>
    <p>Ou seja 254<mark>,</mark> da base decimal<mark>,</mark> para a base 8</p>
    <h2>Ou:</h2>
    <img src="img/exp-cod4.jpg" alt="">
    <?php 
        $binario = base_convert(254, 10, 2);
        print "<p> O numero Binario é $binario</p>";
    ?>
    <p>Ou seja 254<mark>,</mark> da base decimal<mark>,</mark> para a base Binaria ( 2 )</p>

    <hr>
    <p>Outras funções:</p>
    <p>ceil(), floor(), round() - Para aredondamento de números</p>
    <p>hypot() - Hipotenusa</p>
    <p>intdiv() - Divisão Inteira</p>
    <p>min() - Mostra o valor minimo e max() mostra o valor maior</p>
    <p>pi() - Valor de pi OU usar a constante <mark>M_PI</mark> que ja existe no php</p>
    <p>pow() - </p>
    <p>sin(), cos(), tan() - Converte em Seno cosseno e tangente</p>
    <p>sqrt() - Raiz Quadrada </p>

    <hr>
    <p>IntDiv() exemplo:</p>
    <img src="img/exp-cod5.jpg" alt="">
    <?php 
    $divisao_comum = 5 / 2;
    $id = intdiv(5, 2);//5 dividido por 2 tambem
    echo "<br>Saida:";
    echo "<br> Divisão comum é : $divisao_comum ";
    echo "<br> Divisão inteira é : $id";
    ?>
    <hr>
    <p>Min() e Max() exemplo:</p>
    <img src="img/exp-cod7.jpg" alt="">
    <?php
    $min = min(1, 2, 3, 4, 5, 6);
    $max = max(1, 2, 3, 4, 5, 6);
    echo "<br>Saida:";
    print "<br>O valor de min é $min e o valor max é $max"; 
    ?>
    <hr>
    <p>Pi() exemplo:</p>
    <img src="img/exp-cod6.jpg" alt="">
    <?php
    $pi = pi();
    echo "<br>Saida:";
    print "<br>O valor de pi é: $pi"; 
    ?>
    
</body>
</html>