<?php
session_start();
include_once("conexao.php");
?>
<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $resultado = "INSERT INTO alunos (nome, email) VALUES ('$nome', '$email')";
    $resultado_banco = mysqli_query($conn, $resultado);
?>
