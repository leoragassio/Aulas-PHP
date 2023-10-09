<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Salário Minimo</title>
    
</head>
<body>
    <?php 
    $padrao_br= numfmt_create('pt_BR',NumberFormatter::CURRENCY);

    $salario_min = "1320" ;
    $salario_inf =  $_GET["salario_inf"] ?? 1;
    $qntd_salario = $salario_inf/$salario_min ?? 1;
    $rest_salario = $salario_inf%$salario_min ?? 1;
    ?>
    <form action="<?php echo "$_SERVER[PHP_SELF]";?>" method="get">
        <label for="salario_inf">Sálario</label>
        <input type="number" name="salario_inf" id="salario_inf" placeholder="Digite aqui" start="0" value="<?= $salario_inf?>" required>

        <input type="submit" value="Calcular">
    </form>
    <?php 
    echo "<p><strong>Salario Minimo cotado em ". numfmt_format_currency($padrao_br,$salario_min,"BRL") ."</strong></p>";
    if($salario_inf < $salario_min){
        echo "Seu salario de $salario_inf não equivale a 1 salario minimo";
    }else if($salario_inf == $salario_min ){
        echo "<p>Seu salário de " . numfmt_format_currency($padrao_br,$salario_inf,"BRL")  . " equivale a ". round($qntd_salario,0) . " sálario minímo.</p>";
    }
    else{
        echo "<p>Seu salário de " . numfmt_format_currency($padrao_br,$salario_inf,"BRL")  . " equivale a ". round($qntd_salario,0) . " sálarios minímos e mais " . numfmt_format_currency($padrao_br,$rest_salario,"BRL") . ".</p>"  ;
    }
    ?>
</body>
</html>