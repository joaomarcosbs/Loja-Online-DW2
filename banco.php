<?php
// Arquivo de configuração e conexão do banco de dados

/* ---- Definições ---- */

// Endereço do servidor
define('HOST', '127.0.0.1');
// Base de dados
define('DATABASE', 'db_loja');
// Usuário
define('USER', 'root');
// Senha
define('PASSWORD', '123');

/* ---- Tabelas do banco de dados ---- 

-- Base de dados
create database db_loja;

-- Tabela usuários
create table usuarios{
	id int auto_increment primary key,
	nome varchar(128),
	usuario varchar(32),
	senha varchar(64),	
	email varchar(254)
}

-- tabela produtos
create table produtos{
	id int auto_increment primary key,
	nome varchar(128),
	descricao varchar(1024),
	preco 

}

-- relação entre produto e detalhes
create table produto_detalhes{
	id_produto int,
	id_detalhes int,
	primary key(id_produto, id_detalhes)
}

-- detalhes de teclados
create table detalhes_teclado{
	
}

-- detalhes de monitores
create table detalhes_monitor{
	
}

-- detalhes de processadores
create table detalhes_processador{
	
}



*/


/* ---- Funções ---- */  

//Conecta no banco de dados e retorna um objeto referente a conexão	
function connect(){
	$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
	return $conn;
}

?>