<?php
session_start();
?>

<html>
    <head> 
        <title> Cadastro de alunos </title>
    </head>
    <body>
    <h1> Tela de cadastro </h1>
    <form method="POST" action="gravarinfo.php">
    <label> Nome: </label>
    <input type ="text" name="nome" placeholder ="Digite o nome do filme."/> <br/>
    <label> Ano: </label>
    <input type ="number" name="ano" placeholder ="Digite o ano."/> <br/>
    <label> Gênero: </label>
    <input type ="text" name="genero" placeholder ="Digite o gênero."/> <br/>
    <label> Classificação indicativa: </label>
    <input type ="number" name="classificacaoind" placeholder ="Digite a classificação indicativa."/> <br/>
    <label> Duração (em minutos): </label>
    <input type ="number" name="duracao" placeholder ="Digite a duração."/> <br/>
    <label> Diretor: </label>
    <input type ="text" name="diretor" placeholder ="Digite o nome do diretor."/> <br/>
    <input type="submit" value ="Cadastrar" />  
    <input type="reset" value ="Limpar" />  
</form> 
<?php
include('listar.php');
?>
</body>


</html>