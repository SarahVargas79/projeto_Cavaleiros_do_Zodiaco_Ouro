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
		<link rel="stylesheet" type="text/css" href="../css/pgpersonagens.css">
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
			<h1 id="title">Cavaleiros de Ouro</h1>
		<main class="selecao-de-personagens">
			<section class="personagens"><!--delimita a secção da listagem de personagens-->
				<h1 class="titulo">Selecione um personagem</h1>
				<ul class="lista-de-personagens">
					<li class="personagem selecionado" id="shaka-virgem" data-name="SHAKA DE VIRGEM" 
					data-description="Shaka de Virgem está entre os Cavaleiros de Ouro mais populares de Os Cavaleiros 
					do Zodíaco. Conhecido como o Homem Mais Próximo de Deus, ele possui o maior cosmo 
					dentre os 88 Cavaleiros de Atena e se mostrou fundamental para o triunfo dos heróis 
					na Saga de Hades.">
						<img src="../imagens/cdz-virgem.jpg" alt="Personagem Shaka de Virgem">
					</li>
					<li class="personagem" id="saga-gemeos" data-name="SAGA DE GÊMEOS" 
					data-description="Saga de Gêmeos é um poderoso cavaleiro de ouro, sendo considerado 
					como o mais poderoso dentre os doze cavaleiros de ouro, ele era um exemplo de conduta 
					e comprometimento para com sua deusa Athena.">
						<img src="../imagens/cdz-gemeos.jpg" alt="Personagem Saga de Gêmeos">
					</li>
					<li class="personagem" id="donko-libra" data-name="DONKO DE LIBRA" 
					data-description="O aparentemente inofensivo Mestre Ancião nada mais é do que Dohko, o 
					cavaleiro de Libra. Absurdamente poderoso e responsável, o mentor de Shiryu encantou os 
					fãs tanto na forma como o conhecemos, já velhinho e supostamente frágil, quanto atuando 
					no campo de batalha durante a saga de Hades.">
						<img src="../imagens/cdz-libra.png" alt="Personagem Donko de Libra">
					</li>
					<li class="personagem" id="aiola-leao" data-name="AIOLA DE LEÃO" 
					data-description="Aiola cresceu na sombra do irmão, sofrendo todo tipo de humilhação e 
					repudio, por ser irmão do traidor. Para mostrar seu verdadeiro valor, jura lealdade ao 
					Mestre do Santuário e está sempre à frente das batalhas, como na saga do Santuário e no 
					Episódio G.">
						<img src="../imagens/cdz-leao.jpg" alt="Personagem Aiola de Leão">
					</li>
					<li class="personagem" id="aiolos-sagitario" data-name="AIOLO DE SAGITÁRIOS" 
					data-description="Aiolos de Sagitário é o Cavaleiro de Ouro de Sagitário do Século XX. 
					Irmão de Aioria de Leão e melhor amigo de Shura de Capricórnio, morreu ao tentar salvar 
					a infante Atena de Saga de Gêmeos que estava disfarçado de Grande Mestre. Chamado 
					erroneamente de Aioros e Ioria.">
						<img src="../imagens/cdz-sagitario.png" alt="Personagem Aiolo Sagitário">
					</li>
					<li class="personagem" id="camus-aquario" data-name="CAMUS DE AQUÁRIO" 
					data-description="Camus é um cavaleiro bastante poderoso, com habilidade de baixar a 
					temperatura e lançar o Pó de Diamante com grande facilidade. A Execução Aurora é o seu 
					golpe secreto mais poderoso, que emite um frio próximo ao zero absoluto, e foi herdado 
					por Hyoga.">
						<img src="../imagens/cdz-aquario.png" alt="Personagem Camus de Aquário">
					</li>
					<li class="personagem" id="mu-aries" data-name="MU DE ÁRIES"
					data-description="Mu é o Cavaleiro de Ouro de Áries, que protege a Casa de Áries no 
					Santuário. Hábil na restauração de Armaduras, é ele quem conserta as Armaduras de 
					Bronze do Seiya e dos outros antes da Batalha das Doze Casas do Zodíaco.">
						<img src="../imagens/cdz-aries.jpg" alt="Personagem Mu de Áries">
					</li>
					<li class="personagem" id="shura-capricornio" data-name="SHURA DE CAPRICÓRNIO" 
					data-description="Shura é o Cavaleiro de Ouro que protege a Casa de Capricórnio no 
					Santuário. Com um orgulho grandioso, suas técnicas de luta corporal são as mais 
					avançadas entre os Cavaleiros de Ouro e sua principal técnica, Excalibur, um golpe 
					cortante como uma espada, pode ser utilizada com os seus dois braços e pernas.">
						<img src="../imagens/cdz-capricornio.png" alt="Personagem Shura de Capricórnio">
					</li>
					<li class="personagem" id="milo-escorpiao" data-name="MILO DE ESCORPIÃO" 
					data-description="Milo de Escorpião é o cavaleiro que protege a Casa de Escorpião no 
					Santuário de Atena na Grécia. De personalidade por vezes altiva, porem nobre e justo.">
						<img src="../imagens/cdz-escorpiao.png" alt="Personagem Milo de Escorpiao">
					</li>
					<li class="personagem" id="aldebaran-touro" data-name="ALDEBARAN DE TOURO" 
					data-description="Apesar de sua aparência intimidante, Aldebaran é humilde, 
					amigável, leal e honrado entre seus companheiros da ordem e muito estrito 
					em seguir os regulamentos e leis do Santuário.">
						<img src="../imagens/cdz-touro.jpg" alt="Personagem Aldebaran de Touro">
					</li>
					<li class="personagem" id="afrodite-peixes"  data-name="AFRODITE DE PEIXES" 
					data-description="O protetor da última Casa do Zodíaco sendo o sucessor de Albafica de 
					Peixes. Pode derrotar qualquer inimigo se estiver lutando com toda sua força. É um 
					cavaleiro famoso não apenas por sua beleza, mas também pela sua reputação como um dos 
					mais fortes entre os 88 cavaleiros.">
						<img src="../imagens/cdz-peixes.png" alt="Personagem Afrodite de Peixes">
					</li>
					<li class="personagem" id="mascara-morte-cancer"  data-name="MÁSCARA DA MORTE DE CÂNCER" 
					data-description="Máscara da Morte de Câncer é, provavelmente, um dos cavaleiros de ouro 
					mais lembrados da Saga do Santuário de Cavaleiros do Zodíaco. Primeiro porque ele tem uma 
					das lutas mais emblemáticas das 12 Casas, enfrentando Shiryu de Dragão. Segundo, porque 
					ele era um cavaleiro de ouro que realmente agia como um vilão.">
						<img src="../imagens/cdz-cancer.jpg" alt="Personagem Máscara da Morte de Câncer">
					</li>
				</ul>
			</section>
			<section class="personagem-selecionado">
				<img class="personagem-grande" src="../imagens/cdzo-shaka-virgem.png" alt="Personagem Selecionado">
				<div class="informacoes-personagem">
					<h2 class="nome-personagem" id="nome-personagem">SHAKA DE VIRGEM</h2>
					<p class="descricao-personagem" id="descricao-personagem">Shaka de Virgem está entre os 
					Cavaleiros de Ouro mais populares de Os Cavaleiros do Zodíaco. Conhecido como o Homem 
					Mais Próximo de Deus, ele possui o maior cosmo dentre os 88 Cavaleiros de Atena e se 
					mostrou fundamental para o triunfo dos heróis na Saga de Hades.
					</p>
				</div>
			</section><!--personagem que está selecionada no momento-->
    </main><!--Área verde-->
			<footer>
				<div class="rodape">
				Cavaleiros do Zodiaco de Ouro é um projeto criado para o curso de TI
				<br>
				Implementado por Sarah Rafaela Vargas de Andrades Moreira
				</div>
			</footer>
	<script src="../js/pgpersonagens.js"></script>
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