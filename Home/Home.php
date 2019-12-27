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
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <img id="imagem_home" src="../imagens/logo.png" alt="logo">
    <hr>
    <section class="navigation">
        <div class="nav-container">
            <nav>
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
    
    <!-- PERFIL-->
    <div id="perfil">

        <!-- Capa do Perfil -->
        <div class="header">
            <!-- Botão "Alterar Fundo" -->
            <button class="mui-btn">
                <div class="text">ALTERAR FUNDO</div>
                <i class="fa fa-picture-o" aria-hidden="true"></i>
            </button>
        </div>

        <!-- Avatar do Utilizador -->
        <div class="avatar"></div>

        <!-- Opções de Conta -->
        <div class="opperfil">
            <center>
                <!-- Botão "Editar Perfil" -->
                <button class="mui-btn mui-btn--primary">
                    <div class="text">ALTERAR FOTO</div>
                </button>
                <!-- Botão "Alterar Password" -->
                <button class="mui-btn mui-btn--primary">
                    <div class="text">CURRICULUM</div>
                </button>
            </center>
        </div>
        <!-- Opções de vagas -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Vagas Sobre
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Cadastrar Vagas</a>
                <a class="dropdown-item" href="#">Minhas Vagas</a>
            </div>
        </div>
        <!-- Título do Perfil -->
        <div class="tituloperfil">
            <!-- Nome do Utilizador -->
            <h1>Carlos Rogério Ferreira Leite</h1>
            <div class="bigbriefing">
                <!-- Briefing do Candidato -->
                <p>
                    <b>Idade:</b>38 Anos <b>|</b>
                    <b>Distrito:</b>Porto <b>|</b>
                    <b>Função:</b>Desenhador
                </p>
            </div>
            <div class="smallbriefing">
                <!-- Briefing (Justo) do Candidato -->
                <p>
                    <b>Idade:</b>38 Anos <b>|</b>
                    <b>Distrito:</b>Porto
                    <b>Função:</b>Desenhador
                </p>
            </div>
        </div><br/>
        
        <div class="infocandidato">
            <form class="mui-form">

                <h1 class="title-2">Sobre o Candidato</h1>

                <div class="mui-textfield mui-textfield--float-label">
                    <textarea>Apresente-se à comunidade com um pequeno texto a falar um pouco mais sobre si.</textarea>
                </div>
                <br/>

                <h1 class="title-2">Informação do Candidato</h1>

                <div class="mui-textfield mui-textfield--float-label">
                    <input type="text" value="Carlos Rogério Ferreira Leite">
                    <label>Nome Completo</label>
                </div>

                <div class="mui-textfield mui-textfield--float-label">
                    <input type="text" value="Desenhador">
                    <label>Função que Exerce</label>
                </div>

                <div class="mui-select">
                    <select>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                    </select>
                    <label>Distrito Onde Reside</label>
                </div><br/>

                <h1 class="title-2">Informação Pessoal</h1>

                <div class="mui-textfield mui-textfield--float-label">
                    <input type="text" value="carlos.f.leite@autofeito.pt">
                    <label>Endereço de Email</label>
                </div>

                <div class="mui-textfield mui-textfield--float-label">
                    <input type="text" value="916548632">
                    <label>Número de Telefone</label>
                </div><br/>

                <button class="mui-btn mui-btn--raised">Alterar a Password</button>
                <button type="submit" class="mui-btn mui-btn--raised mui-btn--primary">Guardar Alterações</button>
            </form>
        </div>

	    <br/><br/>

    </div>
    <!-- Footer -->
    <footer class="footer">
        <p id="logado_footer"><strong>Email logado:</strong> <?php echo $_SESSION['usuario'];?></p>
        <img id="logo_footer" src="../imagens/logo-utf.png" alt="logo-utf">
        <div id="p_footer">
            © 2019 Lattes Aluno
        </div>
    </footer>
</body>
</html>