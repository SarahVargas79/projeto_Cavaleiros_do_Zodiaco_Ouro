<?php
require ('conexao.php');
require ('dados.class.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$confirmEmail = $_POST['confirmEmail'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['obs'];


$usu = new Usuario();
$usu -> setNome($nome);
$usu -> setSobrenome($sobrenome);
$usu -> setEmail($email);
$usu -> setConfirmarEmail($confirmEmail);
$usu -> setAssunto($assunto);
$usu -> setMensagem($mensagem);

//Inserir os dados do formulário na tabela contato do banco agenda.

$sql = "INSERT INTO contato(nome, sobrenome, email, confirmarEmail, assunto, mensagem)VALUES('".$usu -> getNome()."', '".$usu -> getSobrenome()."', '".$usu -> getEmail()."', '".$usu -> getConfirmarEmail()."', '".$usu -> getAssunto()."', '".$usu -> getMensagem()."')";

//Consulta no banco, se estiver ok a conexão com o banco, grava dentro do banco o isert into.

if($conn -> query($sql) === true){
	echo "<script language='javascript' type='text/javascript'> 
	alert('Formulário enviado com sucesso!');
	window.location.href='index.php';
	</script>";
	die(); 
}else{
		echo "Erro: ".$sql."<br>";
		echo "<br>";
		echo "Não foi possível enviar formulário";
}

//Finaliza a conexão dom o banco;
$conn -> close();

?>