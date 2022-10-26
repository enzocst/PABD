<?php
session_start();
?>
<html>
<head>
<title>Cadastro de alunos</title>
</head>
<body>
    <h1>Cadastro de alunos</h1>

    <form method="POST" action="processa.php">
        <label>Digite seu nome</label>
        <input type="text" name="nome"></input>
        <br>
        <label>Digite seu email</label>
        <input type="text" name="email"></input>
        <input type="submit" value="Cadastrar"></input>
    </form> 
  
</body>
</html>
