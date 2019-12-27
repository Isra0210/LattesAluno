<?php
    session_start();
    session_destroy();
    header("Location: ../Login/Entrar.php");
    exit();
?>
