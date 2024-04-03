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
		
		<link rel="stylesheet" type="text/css" href="../css/pgadm.css"/>
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
		if(isset($_SESSION['email_cad_sessao'])){
			echo "<br>";
			echo '<p class="msg">Administrador(a) '.$_SESSION['email_cad_sessao'].', seja bem-vindo(a)</p>';
			echo "<br>";
			echo "<a class='login' href='areadm.php?dados'>Dados </a>";
			echo "<a class='login' href='../index.php?logout'>Logout</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: ../index.php");
		}
		if(isset($_GET['dados'])){
			header("Location: areadm.php");
		}
		?>
		
		<?php
		include('../conexao.php');
		
		$result = mysqli_query($conn, "SELECT nomeCompleto, telefone, estado, cidade, cpf, email FROM cadastroadm");
		?>
			<form id="cad" action="../processaCadastro.php" method="post">
			<!--fieldset - É usada para agrupar elementos-->
				<fieldset id="areadm"> <!--Inicio - Tag mãe-->
					<h1>Dados Administrativos</h1>
					<?php while ($row = mysqli_fetch_array($result)) : ?>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Nome Completo:</label>
							<label><?= $row['nomeCompleto']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Telefone:</label>
							<label><?= $row['telefone']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Estado:</label>
							<label><?= $row['estado']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Cidade:</label>
							<label><?= $row['cidade']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>CPF:</label>
							<label><?= $row['cpf']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>E-mail:</label>
							<label><?= $row['email']; ?></label>
							<br>
							<br>
						</div>
					</fieldset>
					<?php endwhile; ?>
				</fieldset> <!--Fim - Tag mãe-->
			</form>

		<?php
		include('../conexao.php');
		
		$result = mysqli_query($conn, "SELECT nome, sobrenome, email, confirmarEmail  FROM cadastro");
		?>
			<form id="cad" action="../processaCadastro.php" method="post">
			<!--fieldset - É usada para agrupar elementos-->
				<fieldset id="areadm"> <!--Inicio - Tag mãe-->
					<h1>Dados do Cadastro do Usuário</h1>
					<?php while ($row = mysqli_fetch_array($result)) : ?>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Nome:</label>
							<label><?= $row['nome']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Sobrenome:</label>
							<label><?= $row['sobrenome']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>E-mail:</label>
							<label><?= $row['email']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Confirmar e-mail:</label>
							<label><?= $row['confirmarEmail']; ?></label>
							<br>
							<br>
						</div>
					</fieldset>
					
					<?php endwhile; ?>
				</fieldset> <!--Fim - Tag mãe-->
			</form>

			<?php
		include('../conexao.php');
		
		$result = mysqli_query($conn, "SELECT nome, sobrenome, email, confirmarEmail, assunto, mensagem  FROM contato");
		?>
			<form id="cad" action="../processaCadastro.php" method="post">
			<!--fieldset - É usada para agrupar elementos-->
				<fieldset id="areadm"> <!--Inicio - Tag mãe-->
					<h1>Dados do Contato Formulário</h1>
					<?php while ($row = mysqli_fetch_array($result)) : ?>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Nome:</label>
							<label><?= $row['nome']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Sobrenome:</label>
							<label><?= $row['sobrenome']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>E-mail:</label>
							<label><?= $row['email']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Confirmar e-mail:</label>
							<label><?= $row['confirmarEmail']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Assunto:</label>
							<label><?= $row['assunto']; ?></label>
						</div>
					</fieldset>
					<fieldset class="bloco">
					<!--fieldset do campo nome-->
						<div class="dados">
							<label>Mensagem:</label>
							<label><?= $row['mensagem']; ?></label>
							<br>
							<br>
						</div>
					</fieldset>
					
					<?php endwhile; ?>
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