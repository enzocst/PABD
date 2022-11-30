<html>
    <head> <title> Listar Filmes</title></head>
    <body>
    <h1>Listar Filmes </h1>
    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost",
        "root","","marvel");
        //a variável está recebendo o select do bd
        if($resultado_sel = $mysqli->query("SELECT id, nome, ano, genero, classifição, 
        duracao, diretor FROM informacoes WHERE nome like '".$busca."%'")){
            echo'<table border="1">';
            echo '<tr>';
            echo'<td>Id</td>';
            echo'<td>Nome</td>';
            echo'<td>Ano</td>';
            echo'<td>Gênero</td>';
            echo'<td>Classificação indicativa</td>';
            echo'<td>Duração</td>';
            echo'<td>Diretor</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome'].'</td>';
                echo'<td>'.$row['ano'].'</td>';
                echo'<td>'.$row['genero'].'</td>';
                echo'<td>'.$row['classificacao'].'</td>';
                echo'<td>'.$row['duracao'].'</td>';
                echo'<td>'.$row['diretor'].'</td>';
                echo "<td> <a href='deletar.php?tipo=2&id=".$row['id']."'>
                <img src='img/deleteimg.png' width='20' height='20' title='Excluir'/>
                <img src='img/lapis.png' width='20' height='20' title='Atualizar'/>
                </td>";
                echo'</tr>';
            }
            echo'</table>';
            //$resultado_sel->close();
        }
    ?>
</body>
    </html>