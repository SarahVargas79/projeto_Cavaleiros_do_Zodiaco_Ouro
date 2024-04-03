<?php
//Criar a conexão com o banco de dados

//Nome do servidor
$host = 'localhost';
//Nome do usuário
$user = 'root';
//Senha do banco
$senha = '';
//Nome do banco
$banco = 'cdz_ouro';

//As funções mysql permitem acessar servidores de banco de daos mysql(i no final do mysql significa improved-melhoria) 
$conn = new mysqli($host, $user, $senha, $banco);

//Retorna a descrião do erro, se houver.
if($conn -> connect_error){
	die("Falha na conexão: ".$conn -> connect_error);
} 
?>