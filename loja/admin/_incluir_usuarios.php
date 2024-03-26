<?php
// _incluir_usuarios.php
include 'conexao.php';
$nome_usuario = $_POST['nome_usuario']; 
$email_usuario = $_POST['email_usuario'];
$password = $_POST['password'];
$sql = "INSERT INTO usuarios (nome_usuario,email,password)
 VALUES ('$nome_usuario','$email_usuario','$password')";
//echo($sql);
$inserir = mysqli_query($conexao,$sql);
?>
<center>
<h4>Usuário Adicionado com Sucesso</h4>
</center>
<center>	
<a href="lista_usuarios.php">Voltar</a>
</center>