<?php
include 'conexao.php';
// _incluir_produtos.php';
$desc_produto  = $_POST['desc_produto']; 
$id_categoria  = $_POST['id_categoria'];
$id_fornecedor = $_POST['id_fornecedor'];
$preco         = $_POST['preco'];
$imagem        = $_POST['imagem'];
//echo($imagem);
$sql="insert into produtos (desc_produto,id_categoria,id_fornecedor,preco,imagem) 
values ('$desc_produto','$id_categoria','$id_fornecedor','$preco','$imagem')";
$inserir = mysqli_query($conexao,$sql);
?>
<center>
<h4>Produto Adicionado com Sucesso</h4>
<a href="lista_produtos.php">Voltar</a>
</center>