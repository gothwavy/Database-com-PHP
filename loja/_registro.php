<?php
include 'conexao.php';
$nome_cliente = $_POST['nome_cliente'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$password = $_POST['password'];

$sql = "INSERT INTO clientes (nome_cliente,cpf_cnpj,cep,logradouro,numero,complemento,bairro,cidade,uf,email,celular,`password`) VALUES ('$nome_cliente','$cpf_cnpj','$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf','$email','$celular','$password')";

$inserir = mysqli_query($conexao, $sql);
?>
<center>
  <h4>Registrado com Sucesso</h4>
</center>
<center>
  <a href="login.php" class="btn btn-primary">Voltar</a>
</center>