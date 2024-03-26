<?php

include ("conexao.php");

$id_cliente = $_GET['id_cliente'];
$id_produto = $_GET['id_produto'];
$data = date("j, n, Y");

$sql = "select * from carrinho where id_cliente = $id_cliente";
$buscar = mysqli_query($conexao, $sql);
$existe = 0;

while ($array = mysqli_fetch_array($buscar)) {
  $existe = 1;
  $id_carrinho = $array["id_carrinho"];
}

if ($existe == 0) {
  $sql = "insert into carrinho (id_cliente, data) values ('$id_cliente','$data')";
  $inserir = mysqli_query($conexao, $sql);
  $sql = "select max(id_carrinho) from carrinho";
  $buscar_novo = mysqli_query($conexao, $sql);
  while ($array = mysqli_fetch_array($buscar)) {
    $id_carrinho = $array['id_carrinho'];
  }
}

$sql = "insert into carrinho_itens (id_carrinho, id_produto) values ('$id_cliente','$id_produto')";
$inserir_item = mysqli_query($conexao, $sql);

header('location:index.php');
?>