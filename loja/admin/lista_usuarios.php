<html>
<!-- lista_usuarios.php -->    
<head>
    <!-- Isso é a tag de comantario no HTML -->
    <title>Listagem de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body> 
    <?php
    // Isso é comentário no PHP 
    # Também é um comentário
    /* Aqui começa comentário em várias linhas
    Comentário em várias linhas
    */
    include 'menu.php';
    include 'conexao.php';
    ?> 
    <div class="container">
    <a href="incluir_usuarios.php" class="btn btn-success">Incluir</a>
    <br/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID. Usuarios</th>
            <th>Nome do Usuário</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select * from usuarios";
        $busca_usuario = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($busca_usuario)) {
            $id_usuario = $array['id_usuario'];
            $nome_usuario = $array['nome_usuario'];
        ?>
        <tr>
            <td><?php echo $id_usuario ?></td>
            <td><?php echo $nome_usuario?></td>
            <td><a href="editar_usuarios.php?id_usuario=<?php echo $id_usuario ?>" class="btn btn-warning">Editar</a></td>
            <td><a href="excluir_usuarios.php?id_usuario=<?php echo $id_usuario ?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php } ?>
        </tbody>    
    </table> 
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
</body>
</html>