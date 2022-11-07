<html>
    <head>
        <title>Listar Cadastros</title>
    </head>
<body>
    <h1>Listar Alunos</h1>
    <?php
        $mysql = new mysqli("localhost",
        "root","","cadastro");
        if($resultado_sel = $mysqli-> query("SELECT id, nome, email FROM alunos"))
    ?>
</body>
</html>
