<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="Cadastro.css">
  <title>Cadastro</title>
</head>

<body>
  <section class="c-contain">
    <section class="c-centered">
      <form method="POST" action="verificaCadastro.php">
        <img src="../imagens/logo.png" id="imagem" alt="logo">

        <div class="styled-input">
          <input type="text" name="nome" required />
          <label>Nome</label>
          <span></span>
        </div>

        <div class="styled-input">
          <input type="text" name="email" required />
          <label>Email</label>
          <span></span>
        </div>

        <div class="styled-input">
          <input type="password" name="password" required />
          <label>Senha</label>
          <span></span>
        </div>

        <div class="styled-input">
          <input type="text" name="matricula" required />
          <label>Você é? Aluno/Professor</label>
          <span></span>
        </div>

        <div class="styled-input">
          <input type="text" name="periodo" />
          <label>Período - Aluno</label>
          <span></span>
        </div>

        <div class="styled-input">
          <input type="text" name="projetos" required />
          <label>Projetos que já participou</label>
          <span></span>
        </div>

        <div class="styled-input">
          <input type="text" name="bio" required />
          <label>Biografia</label>
          <span></span>
        </div>

        <!-- Cadastro efetuado com sucesso -->
        <?php
          if(isset($_SESSION["status_cadastro"])):
        ?>
          <strong><p id="cadastrado">CADASTRADO COM SUCESSO!</p></strong>
        <?php
          endif;
          unset($_SESSION["status_cadastro"]);
        ?>

        <!-- Usuário já existe -->
        <?php
          if(isset($_SESSION["usuario_existe"])):
        ?>
          <p id="existe">USUÁRIO JÁ EXISTE!</p>
        <?php
          endif;
          unset($_SESSION["usuario_existe"]);
        ?>

        <button id="cadastra" type="submit">Cadastrar</button>

        <hr>

        <a id="acessarLogin" href="../Login/Entrar.php">Acessar Login</a>

      </form>
    </section>
  </section>
</body>
</html>