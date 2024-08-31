<?php
    class User{
        private $idUser;
        private $nome;
        private $dataNasc;
        private $senha;
        private $email;
        private $grauVicio;
        public function __construct(){
            if (func_num_args() != 0) {
                $atributos = func_get_args()[0];
                foreach ($atributos as $atributo => $valor) {
                    if(isset($valor) && property_exists(get_class($this), $atributo)){
                        $this->$atributo = $valor;
                    }    			
                }
            }
        }
        function atualizar($atributos) {
            foreach ($atributos as $atributo => $valor) {
                if(isset($valor) && property_exists(get_class($this), $atributo)){            	
                    $this->$atributo = $valor;
                }
            }
        }
        public function getIdUser(){
            return $this->idUser;
        } 
        public function setIdUser($idUser){
            return $this->idUser = $idUser;
        }
        public function getNome(){
            return $this->nome;
        } 
        public function setNome($nome){
            return $this->nome = $nome;
        }
        public function getDataNasc(){
            return $this->dataNasc;
        } 
        public function setDataNasc($dataNasc){
            return $this->dataNasc = $dataNasc;
        }
        public function getSenha(){
            return $this->senha;
        } 
        public function setSenha($senha){
            return $this->senha = $senha;
        }
        public function getGrauVicio(){
            return $this->grauVicio;
        } 
        public function setGrauVicio($grauVicio){
            return $this->grauVicio = $grauVicio;
        }
        public function getEmail(){
            return $this->email;
        } 
        public function setEmail($email){
            return $this->email = $email;
        }
        public function __toString(){
            return "idUser: " . $this->idUser . 
                   " nome: " . $this->nome . 
                   " dataNasc: " . $this->dataNasc . 
                   " senha: " . $this->senha . 
                   " email: " . $this->email .
                   " grauVicio: " . $this->grauVicio . 
                   "<br><br>";
        } 
    }
?>