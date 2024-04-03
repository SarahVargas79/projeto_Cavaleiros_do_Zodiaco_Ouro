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
		<link rel="stylesheet" type="text/css" href="../css/pgcreditos.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/alma_de_ouro.ico"/>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&display=swap" rel="stylesheet">

	</head>
	<body>
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
		<div id="container">
			<div id="pimg">
				<p id="pesquerdo">
					Obra original de Masami Kurumada
					<br>
					<br>
					 - Novo clássico do Zodíaco!
					<br>
					<br>
					Agora com o título "Alma de Ouro"!
				</p>
				<img id="logo" src="../imagens/logocdz.png"/>
			</div>
			
			<div>
				<p id="card">
					<img  src="../imagens/Card.png">
				</p>
			</div>
		</div>
		
		<div>
			<p id="pcenter">
				Superfãs, fãs, você que está visitando o site, ajude nós a enganjar, compartilhando
				<br>
				o link junto envie um print do nosso card, com os seus amigos, familiares...
				<br>
				"Agora é a hora de ajudar nossos Cavaleiros de Ouro a continuar salvando a humanidade"
			</p>
		</div>
		
		<footer>
			<div class="rodape">
			Cavaleiros do Zodiaco de Ouro é um projeto criado para o curso de TI
			<br>
			Implementado por Sarah Rafaela Vargas de Andrades Moreira
			</div>
		</footer>
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