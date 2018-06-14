<?php
// Guilherme Silva ©2018

include('config.php');
include('functions.php');


if(isset($_POST['btn_submit'])){
	checkFormData($_POST['nome'], $_POST['sobrenome'], $_POST['telefone'], $_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['verifica-senha']);
	scriptThat("window.location='../login.php'");
	unset($_POST['btn_submit']);
}


?>	
