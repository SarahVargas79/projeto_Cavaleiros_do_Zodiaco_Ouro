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
		<link rel="stylesheet" type="text/css" href="../css/pgvideo.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/alma_de_ouro.ico"/>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap" rel="stylesheet">
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
				<div class="gifs2">
					<img src="../imagens/gif12.gif"/>
					<img class="gif" src="../imagens/gif2.gif"/>
					<img class="gif" src="../imagens/gif3.gif"/>
					<img class="gif" src="../imagens/gif4.gif"/>
				</div>
				
			<div id="jcontainer">
				<div id="gifCDZ">
					<img src="../imagens/gifsCDZS.gif">
				</div>
				
				<div id="video">
					<iframe src="https://www.youtube.com/embed/c2ybNcG8ktc?si=FNb7aIfwKNcdd5ns" title="YouTube video player"
					frameborder="0" allow="accelerometer; autoplay; clipboard-write; ncrypted-media; gyroscope;
					e picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div id="caixa">
					<img id="caixa-pandora" src="../imagens/caixapand.png">
				</div>
			</div>

			<div class="gifs">
				<img src="../imagens/gif.gif"/>
				<img class="gif" src="../imagens/gif5.gif"/>
				<img class="gif" src="../imagens/gif6.gif"/>
				<img class="gif" src="../imagens/gif11.gif"/>
			</div>
			
			<footer>
				<div class="rodape">
				Cavaleiros do Zodiaco de Ouro é um projeto criado para o curso de TI
				<br>
				Implementado por Sarah Rafaela Vargas de Andrades Moreira
				</div>
			</footer>
	<script  src="../js/vanilla-tilt.js" type="text/javascript"></script>	
	<script>
	VanillaTilt.init(document.querySelector("#caixa"), {
			max: 25,
			speed: 400,
		});
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