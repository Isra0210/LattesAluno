<?php
$servername = "127.0.0.1";
$database = "lattes_aluno";
$username = "root";
$password = "";
// Create connection
$conexao = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
//mysqli_close($conexao);
