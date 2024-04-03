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
		<link rel="stylesheet" type="text/css" href="../css/pgcards.css">
		<link rel="stylesheet" type="text/css" href="../css/reset.css">
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/alma_de_ouro.ico"/>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Oxanium:wght@300;400;700&display=swap" rel="stylesheet">
		<link href="https: //fonts.googleapis.com/css2?family= Montserrat+Alternates:wght@500 & family= Montserrat+Subrayada & display=swap" rel="stylesheet">

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
		<main class="selecao-de-personagens">
			<section class="personagens"><!--delimita a secção da listagem de personagens-->
				<h1 class="titulo">Selecione um Card</h1>
				<ul class="lista-de-personagens">
					<li class="personagem selecionado" id="shaka-virgem">
						<img src="../imagens/card-virgo-shaka.jpg" alt="Card Shaka de Virgem">
					</li>
					<li class="personagem" id="saga-gemeos">
						<img src="../imagens/card-gemini-saga.jpg" alt="Card Saga de Gêmeos">
					</li>
					<li class="personagem" id="dohko-libra">
						<img src="../imagens/card-libra-dohko.jpg" alt="Card Dohko de Libra">
					</li>
					<li class="personagem" id="aiolia-leao">
						<img src="../imagens/card-leo-aiolia.jpg" alt="Card Aiola de Leão">
					</li>
					<li class="personagem" id="aiolos-sagitarios">
						<img src="../imagens/card-sagittarius-ailos.jpg" alt="Card Aiolos de Sagitários">
					</li>
					<li class="personagem" id="camus-aquario">
						<img src="../imagens/card-aquarius-camus.jpg" alt="Card Camus de Aquário">
					</li>
					<li class="personagem" id="mu-aries">
						<img src="../imagens/card-aries-mu.jpg" alt="Card Mu de Áries">
					</li>
					<li class="personagem" id="shura-capricornio">
						<img src="../imagens/card-capricorn-shura.jpg" alt="Card Shura de Capricórnio">
					</li>
					<li class="personagem" id="milo-escorpiao">
						<img src="../imagens/card-scorpio-milo.jpg" alt="Card Milo de Escorpião">
					</li>
					<li class="personagem" id="aldebaran-touro">
						<img src="../imagens/card-taurus-aldebaran.jpg" alt="Card Aldebaran de Touro">
					</li>
					<li class="personagem" id="afrodite-peixes">
						<img src="../imagens/card-pisces-aphrodite.jpg" alt="Card Afrodite de Peixes">
					</li>
				</ul>
			</section>
			<section class="personagem-selecionado">
				<img class="personagem-grande" src="../imagens/card-shaka-virgem.jpg" alt="Personagem Selecionado">
			</section><!--personagem que está selecionada no momento-->
    </main><!--Área verde-->
		<footer>
			<div class="rodape">
			Cavaleiros do Zodiaco de Ouro é um projeto criado para o curso de TI
			<br>
			Implementado por Sarah Rafaela Vargas de Andrades Moreira
			</div>
		</footer>
		<script src="../js/pgcards.js"></script>
		<!--Efeito apartir de código pronto -> https://micku7zu.github.io/vanilla-tilt.js/-->
		<script  src="../js/vanilla-tilt.js" type="text/javascript"></script>	
		<script>
		VanillaTilt.init(document.querySelector(".personagem-grande"), {
			max: 20,
			speed: 200,
			glare: true,
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