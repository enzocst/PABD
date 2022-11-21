
<html>
    <head> <title> Listar cadastros</title></head>
    <body>
    <h1>Listar alunos </h1>
    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost",
        "root","","cadastro");
        //a variável está recebendo o select do bd
        if($resultado_sel = $mysqli->query("SELECT id,nome, email FROM alunos WHERE nome like '".$busca."%'")){
            echo'<table border="1">';
            echo '<tr>';
            echo'<td>Id</td>';
            echo'<td>Nome</td>';
            echo'<td>E-mail</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome'].'</td>';
                echo'<td>'.$row['email'].'</td>';
                echo "<td> <a href='deletar.php?tipo=2&id=".$row['id']."'>
                <img src='imagens/borracha.png' width='20' height='20' title='Excluir'/>
                </td>";
                echo'</tr>';
            }
            echo'</table>';
            //$resultado_sel->close();
        }
    ?>
</body>
    </html>