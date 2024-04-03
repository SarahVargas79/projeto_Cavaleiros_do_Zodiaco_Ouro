<?php
	class Usuario{
		private $nomeCompl;
		private $fone;
		private $estado;
		private $cidade;
		private $email;
		private $senha;
		private $cpf;
		
		
		public function getNomeCompleto(){
			return $this -> nomeCompleto;
		}
		public function getFone(){
			return $this -> fone;
		}
		public function getEstados(){
			return $this -> estados;
		}
		public function getCidade(){
			return $this -> cidade;
		}
		public function getEmail(){
			return $this -> email;
		}
		public function getSenha(){
			return $this -> senha;
		}
		public function getCPF(){
			return $this -> cpf;
		}
		
		public function setNomeCompleto($nomeCompl){
			$this -> nomeCompleto = $nomeCompl;
		}
		public function setFone($fone){
			$this -> fone = $fone;
		}
		public function setEstados($estado){
			$this -> estados = $estado;
		}
		public function setCidade($cidade){
			$this -> cidade = $cidade;
		}
		public function setEmail($email){
			$this -> email = $email;
		}
		public function setSenha($senha){
			$this -> senha = $senha;
		}
		public function setCPF($cpf){
			$this -> cpf = $cpf;
		}
	}
?> 