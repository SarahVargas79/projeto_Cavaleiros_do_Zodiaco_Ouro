<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cavaleiros do Zodiaco de Ouro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./css/cabecalho.css"/>
		<link rel="stylesheet" type="text/css" href="./css/corpo.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="./imagens/alma_de_ouro.ico"/>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="corpo">
		</div>
		<header>
			<nav id="menu">
				<div class="topnav" id="myTopnav">
						<img class="logo" src="./imagens/logocavouro.png"/>
						<a class="navlink" href="index.php">INTRO</a>
						<a class="navlink" href="paginas/personagens.php">PERSONAGEM</a>
						<a class="navlink" href="paginas/cards.php">CARDS</a>
						<a class="navlink" href="paginas/serie.php">SÉRIE</a>
						<a href="paginas/cadastro.php">CADASTRO</a>
						<a href="paginas/contato.php">CONTATO</a>
						<a href="paginas/login.php">ACESSO ADM</a>
						<a href="paginas/creditos.php">CRÉDITOS</a>
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
			echo '<p class="msg">Administrador(a) ' . $_SESSION['email_cad_sessao'] . ', seja bem-vindo</p>';
			echo "<br>";
			echo "<a class='login' href='paginas/areadm.php?perfil'>Perfil </a>";
			echo "<a class='login' href='index.php?logout'>Logout</a>";
		}

		if (isset($_GET['logout'])) {
			session_destroy();
			header("Location: index.php");
		}

		if (isset($_GET['perfil'])) {
			header("Location: paginas/areadm.php");
		}
		?>
			<div>
				<p id="imgintro">
					<img  src="./imagens/imgintro.gif">
				</p>
			</div>
			
			<div>
				<p id="pcenter">
				Ultrapassando os limites da eternidade,
				<br>
				os 12 Cavaleiros do Zodíaco estão de volta para proteger o amor e a paz terrestre!
				<br>
				<br>
				“A paz da humanidade está em perigo. E tudo dependerá de nós.
				<br>
				<br>
				"As Flores brotam e morrem... as estrelas brilham mas um dia se apagarão. Tudo morre, a Terra, 
				<br>
				o sol, a via láctea, e até mesmo todo esse universo não é exceção... Comparado a isso a vida do 
				<br>
				homem é tão breve e fugidia quanto um piscar de um olho.... Nesse curto instante, os homens 
				<br>
				nascem, riem, choram, lutam, sofrem, festejam, lamentam, odeiam pessoas e amam outras, 
				<br>
				tudo é transitório... e em seguida, todos caem no sono eterno chamado morte. "
				<br>
				<br>
				2015, ano que o Cosmo do Ouro revive finalmente!
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