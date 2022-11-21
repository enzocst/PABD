<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$result_usuario = "UPDATE alunos SET nome='$nome', email='$email' WHERE id = '$id' ";
$resultado_usuario = mysqli_query($conn, $resultado_usuario);

header("Location:editar.php?id=$id");

?>