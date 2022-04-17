<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("Location: pagina.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" href="assets/img/3.jpeg" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="conteiner__total">
            <div class="caixa__traseira">
                <div class="caixa__traseira-login">
                    <h3>Já possui uma conta?</h3>
                    <p>Faça o seu login para entrar na pagina</p>
                    <button id="btn__iniciar-login">Iniciar sessão</button>
                </div>
                <div class="caixa__traseira-cadastro">
                    <h3>Não possue uma conta?</h3>
                    <p>Cadastrar-se para poder iniciar uma sessão</p>
                    <button id="btn__cadastro">Faça o cadastro</button>
                </div>
            </div>
            <!--FORMULARIO DE LOGIN E CADASTRO-->
            <div class="conteiner__login-cadastro">
                <!--LOGIN-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Login</h2>
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Senha" name="senha">
                    <button>Entrar</button>
                </form>
                <!--CADASTRO-->
                <form action="php/cadastro_usuario_be.php" method="POST" class="formulario__cadastro">
                    <h2>Cadastre-se</h2>
                    <input type="text" placeholder="Nome completo" name="nome_completo">
                    <input type="text" placeholder="Email" name="email">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Senha" name="senha">
                    <button>Fazer Cadastro</button>
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>