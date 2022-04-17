<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo    '
                    <script>
                        window.alert("Por faver inicie a sessão");
                        window.location = "index.php";
                    </script>
                ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
    <h1>Você entrou na pagina!</h1>
    <a href="php/fechar_sessao.php">Fechar sessão</a>
</body>
</html>