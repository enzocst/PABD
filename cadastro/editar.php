<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM alunos WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario       = mysqli_fetch_assoc($resultado_usuario);

?>

<html>
    <head> 
        <title> Alterar alunos </title>
    </head>
    <body>
    <h1> Tela de edição </h1>
    <form method="POST" action="alterar.php">
    <input type ="hidden" name="id" value="<?php echo $row_usuario['id'];?>"/>
    <label> Nome: </label>
    <input type ="text" name="nome" value="<?php echo $row_usuario['nome'];?>"/><br>
    <label> E-mail: </label>
    <input type ="text" name="email" value="<?php echo $row_usuario['email'];?>"/><br>
    <input type="submit" value ="Atualizar" />  
    <input type="reset" value ="Limpar" />  
</form> 
<?php
include('listar.php');
?>
</body>

</html>