<?php
    class Tarefas{
        private $idTarefas;
        private $fkUser;
        private $fkAtividade;
        private $moedaRecebida;
        private $dataConcluida;
        private $tempo;
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
        public function getIdTarefas(){
            return $this->idTarefas;
        } 
        public function setIdTarefas($idTarefas){
            return $this->idTarefas = $idTarefas;
        }
        public function getFkUser(){
            return $this->fkUser;
        } 
        public function setFkUser($fkUser){
            return $this->fkUser = $fkUser;
        }
        public function getFkAtividade(){
            return $this->fkAtividade;
        } 
        public function setFkAtividade($fkAtividade){
            return $this->fkAtividade = $fkAtividade;
        }
        public function getMoedaRecebida(){
            return $this->moedaRecebida;
        } 
        public function setMoedaRecebida($moedaRecebida){
            return $this->moedaRecebida = $moedaRecebida;
        }
        public function getDataConcluida(){
            return $this->dataConcluida;
        } 
        public function setDataConcluida($dataConcluida){
            return $this->dataConcluida = $dataConcluida;
        }
        public function getTempo(){
            return $this->tempo;
        } 
        public function setTempo($tempo){
            return $this->tempo = $tempo;
        }
        public function __toString(){
            return "idTarefas: " . $this->idTarefas . 
                   " fkUser: " . $this->fkUser . 
                   " fkAtividade: " . $this->fkAtividade . 
                   " moedaRecebida: " . $this->moedaRecebida . 
                   " dataConcluida: " . $this->dataConcluida .
                   " tempo: " . $this->tempo . 
                   "<br><br>";
        } 
    }
?>