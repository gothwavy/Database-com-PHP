<?php
include 'conexao.php';
$item_categoria = $_POST['item_categoria'];
$desc_categoria = $_POST['desc_categoria'];
$sql = "INSERT INTO `categorias` (`id_categoria`, `item_categoria`, `desc_categoria`) VALUES (NULL, '$item_categoria', '$desc_categoria')";
$inserir = mysqli_query($conexao, $sql);
?>
<center>
  <h4>categoria adicionada com sucesso</h4>
</center>
<center>
  <a href="lista_categorias.php">Voltar</a>
</center>