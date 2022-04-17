<?php

    include 'conexao_be.php';

    //Pegando as informações
    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = hash('sha512', $_POST['senha']);

    //Colocando as informações no BD
    $query = "INSERT INTO usuarios(nome_completo, email, usuario, senha) 
              VALUES('$nome_completo', '$email', '$usuario', '$senha')";
    
    //Verifical que o EMAIL não se repita no banco de dados
    $verificar_email = mysqli_query($conexao,   " SELECT * FROM  usuarios WHERE email='$email' ");
    if(mysqli_num_rows($verificar_email) > 0){
        echo    '
        <script>
        window.alert("Este email já esta cadastrado, tente outro");
        window.location = "../index.php";
        </script>';
        
        exit(); //A função exit() termina a execução do script. Ela mostra o parâmetro status justamente antes de sair.
    }
    //Verifical que o USUARIO não se repita no banco de dados
    $verificar_usuario = mysqli_query($conexao,   " SELECT * FROM  usuarios WHERE usuario='$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo    '
        <script>
        window.alert("Este usuario já esta cadastrado, tente outro");
        window.location = "../index.php";
        </script>';
        
        exit(); //A função exit() termina a execução do script. Ela mostra o parâmetro status justamente antes de sair.
    }
    
    //Executando
    $executar = mysqli_query($conexao, $query);

    if($executar){
        echo    '<script> 
                    window.alert("Cadastro concluído!")
                    window.location = "../index.php";
                </script>';
    }else{
        echo    '<script> 
                    window.alert("Tente novamente!")
                    window.location = "../index.php";
                </script>';
    }

    mysqli_close($conexao);
