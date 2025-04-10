<?php
    class Usuario {
        private $nome;
        private $email;
        private $senha;
        
        public function __construct($nome, $email, $senha) {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }
        
        public function getNome() {
            return $this->nome;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function autenticar($email, $senha) {
            return $this->email === $email && password_verify($senha, $this->senha);
        }
    }
?>