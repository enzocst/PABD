<?php
session_start();
include_once("conexaomarvel.php");
?>
<?php
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);
    $genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
    $classificacao = filter_input(INPUT_POST, 'classificacao', FILTER_SANITIZE_NUMBER_INT);
    $duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_NUMBER_INT);
    $diretor = filter_input(INPUT_POST, 'diretor', FILTER_SANITIZE_STRING);

    $resultado = "INSERT INTO informacoes (nome, ano, genero, classificacao, duracao, diretor) 
    VALUES ('$nome', '$ano', '$genero', '$classificacao', '$duracao', '$diretor')";
    $resultado_banco = mysqli_query($conn, $resultado);
    header("Location:indexmarvel.php");
?>