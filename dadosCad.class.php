<?php
	class Usuario{
		private $nome;
		private $sobrenome;
		private $email;
		private $confirmEmail;
		
		public function getNome(){
			return $this -> nome;
		}
		public function getSobrenome(){
			return $this -> sobrenome;
		}
		public function getEmail(){
			return $this -> email;
		}
		public function getConfirmEmail(){
			return $this -> confirmEmail;
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
		public function setConfirmEmail($confirmEmail){
			$this -> confirmEmail = $confirmEmail;
		}
	}
?> 