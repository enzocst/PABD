<html>
    <head>
        <title>Listar Cadastros</title>
    </head>
<body>
    <h1>Listar Alunos</h1>
    <?php
    $busca="";
        $mysql = new mysqli("localhost",
        "root","","cadastro");
        if($resultado_sel = $mysqli-> query("SELECT id, 
        nome, email FROM alunos WHERE nome like'.$busca.%'")){
            echo'<table border="1">';
            echo '<tr>';
            echo'<td>Nome</td>';
            echo'<td>E-mail</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['nome'].'</td>';
                echo'<td>'.$row['email'].'</td>';
                echo'</tr>';
            }
            echo'</table>';
        }
    ?>
</body>
</html>
