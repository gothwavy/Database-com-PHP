<!-- _editar_produtos.php -->
<html>
<head>
    <title>Editar produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body> 
    <?php
    include 'conexao.php';
    $id_produto         = $_POST['id_produto'];
    $desc_produto       = $_POST['desc_produto'];
    $id_categoria       = $_POST['id_categoria'];
    $id_fornecedor      = $_POST['id_fornecedor'];
    $preco              = $_POST['preco'];
    $imagem             = $_POST['imagem'];

    $sql = "update produtos set desc_produto = '$desc_produto',
    id_categoria = '$id_categoria', id_fornecedor = '$id_fornecedor',
    preco = '$preco', imagem = '$imagem' 
    where id_produto = '$id_produto'";
    //echo($sql);
    $editar = mysqli_query($conexao, $sql);
     ?>
    <center>
        <h4>Produto Alterado com Sucesso!</h4>
        <a href="lista_produtos.php" class="btn btn-primary">Voltar</a>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
</body>
</html>
