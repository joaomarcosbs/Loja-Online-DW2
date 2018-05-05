<?php
// Guilherme Silva ©2018
include 'config.php';


function connectBD(){
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die(mysql_error());
	return $conn;
}

/* util */
function showArray($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function scriptThat($js){
	echo '<script>'.$js.'</script>';
}
/* --------------------------- */

function checkFormSqlInjection($str){
	$chars = array('\'', '"', ',', ';', '(', ')');
	foreach($chars as $key => $val){
		if(strpos($str, $val) !== false){
			return 1;
		}
	}
}

function checkFormData(){
	//func_get_arg(1);
	$data = func_get_args();

	// Checa se existe algum campo em branco
	foreach($data as $key => $val){
		if($val == ""){
			scriptThat('window.alert("Preencha todos os campos!");');
			return 1;
		}
	}

	//Previne SQL Injection
	foreach($data as $key => $val){
		if(checkFormSqlInjection($val)){
			scriptThat('window.alert("Caracteres deste tipo não são permitidos!");');
			return 1;
		}
	}

	$pNome      = func_get_arg(0);
	$pSobrenome = func_get_arg(1);
	$pTelefone  = func_get_arg(2);
	$pCPF       = func_get_arg(3);
	$pEmail     = func_get_arg(4);
	$pSenha     = password_hash(func_get_arg(5), PASSWORD_DEFAULT);
	

	$conn = connectBD();
	$sql  = "INSERT INTO usuarios(usuario_nome, usuario_sobrenome, usuario_telefone, usuario_cpf, usuario_email, usuario_senha)
	         VALUES('$pNome', '$pSobrenome', '$pTelefone', '$pCPF', '$pEmail', '$pSenha')";
	$RS   = mysqli_query($conn, $sql);

	if($RS){
		scriptThat('window.alert("Cadastro realizado com sucesso!");');
	}
	else{
		scriptThat('window.alert("Falha ao realizar o cadastro");');
	}

}


?>