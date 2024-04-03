<?php
	include('conexao.php');
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$entrar = $_POST['entrar'];
	
	$criptografia = md5($senha);
	
	if(isset($entrar)){
		$verifica = mysqli_query($conn, "select * from cadastroadm where email = '$email' and senha = '$criptografia'") or die("Erro ao buscar do banco");
		//Verificar se a váriavel é false.
		if(mysqli_num_rows($verifica) <=0){ 
			echo "<script language='javascript' type='text/javascript' >alert('Não foi possível realizar o login'); window.location.href = 'paginas/login.php';</script>";
			die();
		}else{
			session_start();
			$_SESSION['email_cad_sessao'] = $email;
			header("Location: paginas/areadm.php");
		}
	}
?>