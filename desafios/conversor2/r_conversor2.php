<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de Moedas</h1>
    <div>
    <?php
    $quantidade = $_GET["quantidade"];
    $inicio =date("m-d-Y",strtotime("-7 days")); 
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url),true);//Puxa os dados do Arquivo Json pelo link da variavel $url;

    $cotacao = $dados['value'][0]["cotacaoCompra"];//variavel da cotação atualizada pela API


    //BIBLIOTECA INTL (Internalização de Moedas)
    $resultado = ($quantidade / $cotacao) ;
    $padrão = numfmt_create("pt-BR",NumberFormatter::CURRENCY);

    echo "<p>" .numfmt_format_currency($padrão,$quantidade, "BRL") . " equivalem a " . numfmt_format_currency($padrão,$resultado, "USD")  . "</p>";

    
    echo "<p>Cotação atual:" . numfmt_format_currency($padrão,$cotacao,"USD") . "</p>";
    echo "<p>Consulta do dia: " . date("d/m/Y") . "</p>";


    echo '<p> Dados consultados pelo <a href="https://www.bcb.gov.br/" target="blank">Banco Central Do Brasil </a></p>'
    ?>
    </div>
    <a href="./conversor2.php">Voltar</a>
</body>
</html>