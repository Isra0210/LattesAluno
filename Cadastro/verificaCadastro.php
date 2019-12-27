<?php
    session_start();
    include"../conexao.php";
    //Pegando valores dos inputs -- trim -> tira o espacamento
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['password']));
    $matricula = mysqli_real_escape_string($conexao, trim($_POST['matricula']));
    $periodo = mysqli_real_escape_string($conexao, trim($_POST['periodo']));
    $projeto = mysqli_real_escape_string($conexao, trim($_POST['projetos']));
    $bio = mysqli_real_escape_string($conexao, trim($_POST['bio']));

    //verificando se o usuario ja existe no banco
    $sql = "select count(*) as total from usuarios where email = '$email'";
    //Executando a query
    $result = mysqli_query($conexao, $sql);

    $row = mysqli_fetch_assoc($result);

    //Verificacao se ja existe usuaio
    if($row["total"] == 1){
        //Criando uma sessao que o usuário ja existe
        $_SESSION["usuario_existe"] = true;
        header("Location: ../Cadastro/Cadastro.php");
        exit();
    }

    //Inserindo usuario no banco
    $sql = "INSERT INTO usuarios(nome, email, senha, matricula, periodo, projetos, bio) VALUE ('$nome', '$email', '$senha', '$matricula', '$periodo', '$projeto', '$bio')";

    //Verificando os dados
    if($conexao->query($sql) === TRUE){
        $_SESSION["status_cadastro"] = true;
    }

    $conexao -> close();

    header("Location: ../Cadastro/Cadastro.php");

    exit;
?>

