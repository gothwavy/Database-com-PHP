<?php
include 'conexao.php';
$id_categoria = $_POST['id_categoria'];
$item_categoria = $_POST['item_categoria'];
$desc_categoria = $_POST['desc_categoria'];
$sql = "UPDATE categorias SET item_categoria = '$item_categoria' WHERE categorias.id_categoria = $id_categoria";
$sql2 = "UPDATE categorias SET desc_categoria = '$desc_categoria' WHERE categorias.id_categoria = $id_categoria";
$inserir = mysqli_query($conexao, $sql);
$inserir2 = mysqli_query($conexao, $sql2);
?>
<center>
  <h4>categoria alterada com sucesso</h4>
</center>
<center>
  <a href="lista_categorias.php">Voltar</a>
</center>