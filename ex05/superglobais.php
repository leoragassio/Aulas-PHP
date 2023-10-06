<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais do PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 
            setcookie("dia-da-semana",date("d"),time()+ 3600);

            session_start();
            $_SESSION["teste"] = "Funcionou!!";

            echo '<h1Super Global $_GET</h1>';
            var_dump($_GET);

            echo '<h1>Super Global$_POST</h1>';
            var_dump($_POST);

            echo '<h1>Super Global $_REQUEST</h1>';
            var_dump($_REQUEST);

            echo'<h1>Super Global $_COOKIE</h1>';
            var_dump($_COOKIE);

            echo'<h1Super Global $_SESSION</h1>';
            var_dump($_SESSION);
            echo "$_SESSION[teste]";

            echo'<h1>Super Global $_ENV</h1>';
            var_dump($_ENV);

            echo '<h1>Super Global $_SERVER </h1>';
            var_dump($_SERVER);
            echo "$_SERVER[PHP_SELF]";

            echo '<h1>Super Global $GLOBALS</h1>';
            var_dump($GLOBALS);
            ?>

           
        </pre>

    </main>

</body>
</html>