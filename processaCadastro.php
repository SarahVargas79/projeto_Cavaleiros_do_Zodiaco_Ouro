<?php
require ('conexao.php');
require ('dadosCad.class.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$confirmEmail = $_POST['confirmEmail'];

$usu = new Usuario();
$usu -> setNome($nome);
$usu -> setSobrenome($sobrenome);
$usu -> setEmail($email);
$usu -> setConfirmEmail($confirmEmail);

	if($email == "" || $email == null){
		echo "<script language='javascript' type='text/javascript' >alert('O campo email deve ser preeenchido'); window.location.href = 'paginas/cadastro.php';</script>";
	}else{
			$inserir = "INSERT INTO cadastro(nome, sobrenome,email, confirmarEmail)VALUES('".$usu -> getNome()."', '".$usu -> getSobrenome()."', '".$usu -> getEmail()."', '".$usu -> getConfirmEmail()."')";
			$executar = mysqli_query($conn, $inserir);
			if($executar){
				echo "<script language='javascript' type='text/javascript' >alert('Cadastro realizado com sucesso!'); window.location.href = 'index.php';</script>";
			}else{
				echo "<script language='javascript' type='text/javascript' >alert('Não foi possível realizar o cadastro'); window.location.href = 'paginas/cadastro.php';</script>";
			}
		}

//Finaliza a conexão dom o banco;
$conn -> close();
?>