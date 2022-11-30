<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$cadastro = "INSERT INTO alunos(nome, email) VALUES ('$nome', '$email')";

$resultado = mysqli_query($conexao, $cadastro);
?>
