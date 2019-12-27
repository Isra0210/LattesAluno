<?php
    session_start();
    include("../Login/VerificaLogin.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../Home/Home.css">
    <link rel="stylesheet" href="Alunos.css">
    <title>Alunos</title>
</head>
<body>
<img id="imagem_home" src="../imagens/logo.png" alt="logo">
    <hr>
    <section class="navigation">
        <div class="nav-container">
            <nav>
                <div class="nav-mobile"></div>
                    <ul class="nav-list">
                        <li>
                            <a href="../Home/Home.php">Home</a>
                        </li>
                        <li>
                            <a href="../Vagas/Vagas.php">Vagas</a>
                        </li>
                        <li>
                            <a href="../Alunos/Alunos.php">Alunos</a>
                        </li>
                        <li>
                            <a href="../Professores/Professores.php">Professores</a>
                        </li>
                        <li>
                            <a href="#!">Contato</a>
                        </li>
                        <li>
                            <a href="../Login/Logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <hr>
    <!-- Cards -->
    <div class="card" style="width: 18rem;">
        <img src="../imagens/isra.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Israel Rodrigues</h5>
            <p class="card-text">Html, css, js, php, node, react, MongoDb, Mysql, amo tecnologias e estou dispposto a sempre estar aprendendo coisas novas</p>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Acessar perfil</a>
        </div>
    </div>
    <!-- Cards -->
    <div class="card" style="width: 18rem;">
        <img src="../imagens/isra.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Israel Rodrigues</h5>
            <p class="card-text">Html, css, js, php, node, react, MongoDb, Mysql, amo tecnologias e estou dispposto a sempre estar aprendendo coisas novas</p>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Acessar perfil</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <?php
            if(!$_SESSION['usuario']){
                header('Location: ../Login/Entrar.php');
            }
        ?>   
        <p id="logado_footer"><strong>Email logado:</strong> <?php echo $_SESSION['usuario'];?></p>
        <img id="logo_footer" src="../imagens/logo-utf.png" alt="logo-utf">
        <div id="p_footer">
            © 2019 Lattes Aluno
        </div>
    </footer>
</body>
</html>