<?php
    session_start();
    
    include 'conexao_be.php';

    $email = $_POST['email'];
    $senha = hash('sha512', $_POST['senha']);

    $validar_login = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'
    and senha = '$senha'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: ../pagina.php");
        exit;
    }else{
        echo    '
                    <script>
                        window.alert("Usuario não existe, verifica os seus dados novamente");
                        window.location = "../index.php";
                    </script>
                ';
        exit;
    }