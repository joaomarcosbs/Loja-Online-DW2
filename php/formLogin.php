<?php
// Guilherme Silva ©2018

include('config.php');
include('functions.php');

$con = connectBD();

$pEmail = $_POST['email'];
$pSenha = $_POST['senha'];

$sql = "select usuario_email from usuarios where usuario_email = '" . $pEmail . "'";
$rs = mysqli_query($con, $sql);
$numRows = mysqli_num_rows($rs);

if(!$numRows){
	scriptThat('window.alert("E-mail não cadastrado no sistema!"); window.location="../login.php"');
}else{
	$sql  = "select usuario_senha from usuarios where usuario_email = '" . $pEmail . "'";
	$rs   = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($rs);

	if(password_verify($pSenha, $data['usuario_senha'])){
		if(logar($pEmail, $pSenha)){
			scriptThat("window.location='../index.php'");
		}


	}
	else{
		scriptThat('window.alert("E-mail ou senha inválidos!"); window.location="../login.php"');
	}



}














?>