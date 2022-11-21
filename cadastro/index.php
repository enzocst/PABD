<?php
session_start();
?>

<html>
    <head> 
        <title> Cadastro de alunos </title>
    </head>
    <body>
    <h1> Tela de cadastro </h1>
    <form method="POST" action="gravarInformacoes.php">
    <label> Nome: </label>
    <input type ="text" name="nome" placeholder ="Digite nome completo"/> <br/>
    <label> E-mail: </label>
    <input type ="text" name="email" placeholder ="Digite seu e-mail."/> <br/>
    <input type="submit" value ="Cadastrar" />  
    <input type="reset" value ="Limpar" />  
</form> 
<?php
include('listar.php');
?>
</body>


</html>