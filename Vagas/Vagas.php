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
    <link rel="stylesheet" href="Vagas.css">
    <link rel="stylesheet" href="../Home/Home.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Vagas</title>
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
    <!-- Card -->
    <div class="card">
        <div class="description">
            <h1 class="titulo-vagas">Vagas par Programador PHPfsdfdssdfsfs</h1>
            <hr class="hr-card-vagas">
            <p class="p-vagas   ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <!-- Modal -->
            <a href="#open-modal">
                <button class="btn-primary">
                    Ler Mais
                </button>
            </a>
            <div id="open-modal" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>
                    <h1>Voilà!</h1>
                    <div>A CSS-only modal based on the :target pseudo-class. Hope you find it helpful.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="description">
            <h1 class="titulo-vagas">Vagas par Programador PHPfsdfdssdfsfs</h1>
            <hr class="hr-card-vagas">
            <p class="p-vagas   ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <!-- Modal -->
            <a href="#open-modal">
                <button class="btn-primary">
                    Ler Mais
                </button>
            </a>
            <div id="open-modal" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>
                    <h1>Voilà!</h1>
                    <div>A CSS-only modal based on the :target pseudo-class. Hope you find it helpful.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="description">
            <h1 class="titulo-vagas">Vagas par Programador PHPfsdfdssdfsfs</h1>
            <hr class="hr-card-vagas">
            <p class="p-vagas   ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <!-- Modal -->
            <a href="#open-modal">
                <button class="btn-primary">
                    Ler Mais
                </button>
            </a>
            <div id="open-modal" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>
                    <h1>Voilà!</h1>
                    <div>A CSS-only modal based on the :target pseudo-class. Hope you find it helpful.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="description">
            <h1 class="titulo-vagas">Vagas par Programador PHPfsdfdssdfsfs</h1>
            <hr class="hr-card-vagas">
            <p class="p-vagas   ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <!-- Modal -->
            <a href="#open-modal">
                <button class="btn-primary">
                    Ler Mais
                </button>
            </a>
            <div id="open-modal" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>
                    <h1>Voilà!</h1>
                    <div>A CSS-only modal based on the :target pseudo-class. Hope you find it helpful.</div>
                </div>
            </div>
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
    </footer>s
</body>
</html>