<?php
// Guilherme Silva ©2018

include('config.php');
include('functions.php');

if(isset($_POST['btn_submit']) && $_POST['btn_submit'] == 'Registrar'){
	checkFormData($_POST['nome'], $_POST['sobrenome'], $_POST['telefone'], $_POST['cpf'], $_POST['email'], $_POST['senha'] );
	unset($_POST['btn_submit']);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste form</title>
</head>
<body>
	<form action='register.php' method='POST'>
		<input type="text" name="nome" placeholder="Nome"><br>
		<input type="text" name="sobrenome" placeholder="Sobrenome"><br>
		<input type="text" name="telefone" placeholder="Telefone"><br>
		<input type="text" name="cpf" placeholder="CPF"><br>
		<input type="text" name="email" placeholder="E-mail"><br>
		<input type="text" name="senha" placeholder="Senha"><br>
		<input type="submit" name="btn_submit" value="Registrar">
	</form>
</body>
</html>