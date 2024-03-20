<?php
// _incluir_fornecedores.php
include 'conexao.php';
$nome_fornecedor = $_POST['nome_fornecedor'];
$cpf_cnpj   = $_POST['cpf_cnpj'];
$cep        = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero     = $_POST['numero']; 
$complemento = $_POST['complemento'];  
$bairro     = $_POST['bairro'];
$cidade     = $_POST['cidade']; 
$uf         = $_POST['uf']; 
$email      = $_POST['email'];
$celular     = $_POST['celular'];

$sql = "INSERT INTO fornecedores (nome_fornecedor,cpf_cnpj,cep,logradouro,numero,
complemento,bairro,cidade,uf,email,celular) VALUES ('$nome_fornecedor','$cpf_cnpj',
'$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf','$email',
'$celular')";
//echo($sql);
$inserir = mysqli_query($conexao,$sql);
?>
<center>
<h4>Fornecedor Adicionado com Sucesso</h4>
</center>
<center>	
<a href="lista_fornecedores.php" class="btn btn-primary">Voltar</a>
</center>