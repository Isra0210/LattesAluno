<?php
    if(!$_SESSION['usuario']){
        session_destroy();
        header("Location: ../Login/Entrar.php");
        exit();
    }
?>