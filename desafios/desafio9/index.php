<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Idade</title>
</head>
<body>
    <?php 
    $ano = date('Y');
    $anoNasc = $_GET["anoNasc"] ?? 2003;
    $anoCalc = $_GET["anoCalc"] ?? $ano;
    $idade = $anoCalc-$anoNasc ;
    ?>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <label for="anoNasc">Em que ano você nasceu?</label>
    <input type="number" id="anoNasc" name="anoNasc"  placeholder="Digite o valor" value="<?=$anoNasc?>" required>
    <br>
    <label for="anoCalc">Quer saber sua idade em que ano? (atualmente estamos em <?=$ano?>)</label>
    <input type="number" id="anoCalc" name="anoCalc" placeholder="Digite o valor" value="<?=$anoCalc?>" required>
    <input type="submit" value="Calcular">
    </form>

    <?php 

    /*
        n existe            OK
        n era nascido       OK
        1 ano               OK              
        tinha               OK  
        tem                 OK     
        Vai ter             
    */ 
    if($idade < 0){
        echo "Essa posibilidade não existe";
    }else if($anoNasc == $ano || $idade == 0){
        echo"Você não era nascido essa época.";
    }else if($anoNasc > $ano){
        echo "Você terá $idade ano(s) em $anoCalc ";
    }else if($idade == 1){
        echo "Você tem 1 ano";
    }else if($anoCalc < $ano){
        echo "Você tinha $idade ano(s) em $anoCalc";
    }else if($anoCalc == $ano){
        echo "Você tem $idade ano(s).";
    }else if($anoCalc > $ano){
        echo "Você terá $idade ano(s) em $ano.";
    }else{
        echo "ERRO";
    }
    ?>
</body>
</html>