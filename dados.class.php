<?php
	class Usuario{
		private $nome;
		private $sobrenome;
		private $email;
		private $confirmEmail;
		private $assunto;
		private $mensagem;

		public function getNome(){
			return $this -> nome;
		}
		public function getSobrenome(){
			return $this -> sobrenome;
		}
		public function getEmail(){
			return $this -> email;
		}
		public function getConfirmarEmail(){
			return $this -> confirmarEmail;
		}
		public function getAssunto(){
			return $this -> assunto;
		}
		public function getMensagem(){
			return $this -> mensagem;
		}
		
		public function setNome($nome){
			$this -> nome = $nome;
		}
		public function setSobrenome($sobrenome){
			$this -> sobrenome = $sobrenome;
		}
		public function setEmail($email){
			$this -> email = $email;
		}
		public function setConfirmarEmail($confirmEmail){
			$this -> confirmarEmail = $confirmEmail;
		}
		public function setAssunto($assunto){
			$this -> assunto = $assunto;
		}
		public function setMensagem($mensagem){
			$this -> mensagem = $mensagem;
		}
	}
?> 