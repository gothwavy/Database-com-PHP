<?php
// _inserir_categorias.php
include 'conexao.php';
$desc_categoria = $_POST['desc_categoria']; 
$sql = "INSERT INTO categorias (desc_categoria) VALUES ('$desc_categoria')";
//echo($sql);
$inserir = mysqli_query($conexao,$sql);
?>
<center>
<h4>Categoria Adicionada com Sucesso</h4>
</center>
<center>	
<a href="lista_categorias.php">Voltar</a>
</center>
