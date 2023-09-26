<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Teste de tipos Primitivos</h1>
    <h2>Tipos escalares</h2>
    <?php 
    //  0x = Hexadecimal  0b = Binario  0 = Octal
    $num = 010;
    echo 'O valor da variavel $num é: ' . $num . "<br>";

    $v = 300;
    echo 'O valor da variavel $v é ' . $v . "<br>";
    $nickname = "leoragassio";
    echo "O valor das variaveis são:";
    var_dump($num);
    var_dump($v);
    var_dump($nickname);

    //Coersão em php:
    $numero = (integer) "987";
    var_dump($numero);

    //para valores boleanos o resultados são: True = 1; False = Vazio 
    $casado = false;
    var_dump($casado);
    ?>
    <p>Codigo:</p>
    <img style=" border-radius:10px;"  src="img/cod1.jpg" alt="Imagem do código que gerou a saida acima">
    <h2>Tipos Compostos</h2>
    <?php 
    //Array
    $vet = ["Guilherme", "18", false, 85.7];
    var_dump($vet);

    //Object
    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);

    // ARRAY E OBJETO SÃO DO TIPO COMPOSTO
    ?>
    <img style=" border-radius:10px;" src="img/cod2.jpg" alt="Imagem do código que gerou a saida acima">
</body>
</html>