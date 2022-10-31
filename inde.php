<?php
session_start();
?>

<html>
<head> 
    <title> Cadastro de alunos </title> 
</head>
<body>
    <h1> Tela de cadastro </h1>
        <form method = "POST" action = "gravarinformacoes.php">
        <label> Nome: </label>
        <input type="text" name="nome" placeholder ="Digite seu nome"></input>
        <br>
        <label> Email: </label>
        <input type = "email" name="email" placeholder = "Digite seu email"></input>
        <br>
        <input type = "submit" value = "Cadastrar"></input>
        <input type = "reset" value = "Limpar" ></input>
    </form>
</body>
</html>
