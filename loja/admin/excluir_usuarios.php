<!-- excluir_usuarios.php -->
<html>
<head>
    <title>Excluir Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body> 
    <?php
    include 'conexao.php';
    $id_usuario = $_GET['id_usuario'];

    $sql = "delete from usuarios  
    where id_usuario = '$id_usuario'";
    //echo($sql);

    $editar = mysqli_query($conexao, $sql);
     ?>
    <center>
        <h4>Usuário Excluido com Sucesso!</h4>
        <a href="lista_usuarios.php" class="btn btn-primary">Voltar</a>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
</body>
</html>
