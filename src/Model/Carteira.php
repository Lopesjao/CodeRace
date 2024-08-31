<?php
    class Carteira{
        private $idCarteira;
        private $fkUser;
        private $moedaRecebida;
        private $moedaAtual;
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
        public function getIdCarteira(){
            return $this->idCarteira;
        } 
        public function setIdCarteira($idCarteira){
            return $this->idCarteira = $idCarteira;
        }
        public function getFkUser(){
            return $this->fkUser;
        } 
        public function setFkUser($fkUser){
            return $this->fkUser = $fkUser;
        }
        public function getMoedaRecebida(){
            return $this->moedaRecebida;
        } 
        public function setMoedaRecebida($moedaRecebida){
            return $this->moedaRecebida = $moedaRecebida;
        }
        public function getmoedaAtual(){
            return $this->moedaAtual;
        } 
        public function setMoedaAtual($moedaAtual){
            return $this->moedaAtual = $moedaAtual;
        }
        public function __toString(){
            return "idCarteira: " . $this->idCarteira . 
                   " fkUser: " . $this->fkUser . 
                   " moedaRecebida: " . $this->moedaRecebida . 
                   " moedaAtual: " . $this->moedaAtual . 
                   "<br><br>";
        } 
    }
?>