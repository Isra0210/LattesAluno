<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
</head>
<body>
    <img src="../imagens/logo.png" id="imagem_login" alt="logo">
    <div class="container" >
        <div class="content">      
        <!--FORMULÁRIO DE LOGIN-->
        <div id="login">
            <form method="POST" action="Login.php"> 
            <h1>Login</h1> 
            <p> 
                <label for="email_login">Seu e-mail</label>
                <input id="email_login" name="email_login" required="required" type="text" placeholder="Seu email"/>
            </p>
            
            <p> 
                <label for="senha_login">Sua senha</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="Sua senha" /> 
            </p>

            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>
                <div>
                <p class="notificacao">Usuário ou senha inválidos!</p>
                </div>
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>

            <p> 
                <input type="submit" value="Logar" /> 
            </p>
            
            <p class="link">
                Ainda não tem conta?
                <a href="../Cadastro/Cadastro.php">Cadastre-se</a>
            </p>
            </form>
        </div>
    </div>
</body>
</html>