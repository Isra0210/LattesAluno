<?php
    session_start();
    include "../conexao.php";

    //Se o usuário tentar submeter sem ere efetuado login sera redirecionado para a mesma pagina 
    if(empty($_POST["email_login"]) || empty($_POST["senha_login"])){
        header("location: Entrar.php");
        exit();
    }
    //Verificando usuário
    $usuario = mysqli_real_escape_string($conexao, $_POST['email_login']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha_login']);
    
    $query = "select email, senha from usuarios where email = '{$usuario}' and senha = '{$senha}'";
    
    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);
   
    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: ../Home/Home.php');
        exit();
        
    }
    
    else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: ./Entrar.php');
        exit();
    } 
?>