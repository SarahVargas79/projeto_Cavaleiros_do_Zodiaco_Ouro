<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cavaleiros do Zodiaco de Ouro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/cabecalho.css"/>
		<link rel="stylesheet" type="text/css" href="../css/corpo.css"/>
		<link rel="stylesheet" type="text/css" href="../css/formulario.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/alma_de_ouro.ico"/>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		
	</head>
	<body>
		<div id="corpo">
		</div>
		<header>
			<nav id="menu">
				<div class="topnav" id="myTopnav">
						<img class="logo" src="../imagens/logocavouro.png"/>
						<a class="navlink" href="../index.php">INTRO</a>
						<a class="navlink" href="personagens.php">PERSONAGEM</a>
						<a class="navlink" href="cards.php">CARDS</a>
						<a class="navlink" href="serie.php">SÉRIE</a>
						<a href="cadastro.php">CADASTRO</a>
						<a href="contato.php">CONTATO</a>
						<a href="login.php">ACESSO ADM</a>
						<a href="creditos.php">CRÉDITOS</a>
					  <!--
					  <a href="javascript:void(0)" onclick="myFunction();">
					  Executar JavaScript</a>
					  método de criar links que executam uma função em JavaScript
					  -->
					  <a href="javascript:void(0);" style="font-size:15px;" class="icon" 
					  onclick="myFunction()">&#9776;</a>
				</div>
			</nav>	
		</header>
		<?php
		if (isset($_SESSION['email_cad_sessao'])) {
			echo "<br>";
			echo '<p class="msg">Administrador(a) '.$_SESSION['email_cad_sessao'].', seja bem-vindo(a)</p>';
			echo "<br>";
			echo "<a class='login' href='areadm.php?perfil'>Perfil </a>";
			echo "<a class='login' href='../index.php?logout'>Logout</a>";
		}

		if (isset($_GET['logout'])) {
			session_destroy();
			header("Location: ../index.php");
		}

		if (isset($_GET['perfil'])) {
			header("Location: areadm.php");
		}
		?>
		<form id="cad" action="../processaCadastro.php" method="post">
	<!--fieldset - É usada para agrupar elementos-->
			<fieldset> <!--Inicio - Tag mãe-->
				<h1>Cadastro de Usuário</h1>
				<fieldset class="bloco">
				<!--fieldset do campo nome-->
					<div class="dados">
						<label>Nome:</label>
						<input type="text" id="nome" name="nome" required>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo nome-->
					<div class="dados">
						<label>Sobrenome:</label>
						<input type="text" id="sobrenome" name="sobrenome" required>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo e-mail-->
					<div class="dados">
						<label>E-mail:</label>
						<input type="email" id="email" name="email" required placeholder="nome@dominio.com" onchange="validar()">
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo confirme e-mail-->
					<div class="dados">
						<label>Confirme o E-mail:</label>
						<input type="email" id="confirmemail" name="confirmEmail" required placeholder="nome@dominio.com" onchange="validar()">
					</div>
				</fieldset>
				<button type="submit" class="botao" name="submit">Cadastrar</button>
				<p id="pcenter">
				Obs: O cadastro não é obrigatório, pois será
				<br>
				utilizado para retornar se houver alguma 
				<br>
				resposta para o usuário.
			</fieldset> <!--Fim - Tag mãe-->
		</form>
			
			<footer>
				<div class="rodape">
				Cavaleiros do Zodiaco de Ouro é um projeto criado para o curso de TI
				<br>
				Implementado por Sarah Rafaela Vargas de Andrades Moreira
				</div>
			</footer>
		<script>
		function validar(){
			var campo1 = document.getElementById("email");
			var campo2 = document.getElementById("confirmemail");
			if(campo1.value != campo2.value){
				campo2.setCustomValidity("O e-mail não confere");
				campo2.validity = false;
			}else{
				campo2.setCustomValidity("");
				campo2.validity = true;
			}
		}
		</script>
		<script>
		/*Alterne entre adicionar e remover a classe "responsivo" 
		para o topnav quando o usuário clicar no ícone
		1-cria a função para aplicar a responsividade no menu
			*/
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
			x.className += " responsive";//Abre e executa o icone do menu
		  } else {
			x.className = "topnav";//recolhe o menu pelo icone
		  }
		}
		</script>
		
	</body>
</html>