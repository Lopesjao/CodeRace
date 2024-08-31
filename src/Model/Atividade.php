<?php
    class Atividade{
        private $idAtividade;
        private $descAtividade;
        private $imagemAtividade;
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
        public function getIdAtividade(){
            return $this->idAtividade;
        } 
        public function setIdCarteira($idAtividade){
            return $this->idAtividade = $idAtividade;
        }
        public function getDescAtividade(){
            return $this->descAtividade;
        } 
        public function setDescAtividade($descAtividade){
            return $this->descAtividade = $descAtividade;
        }
        public function getImagemAtividade(){
            return $this->imagemAtividade;
        } 
        public function setImagemAtividade($imagemAtividade){
            return $this->imagemAtividade = $imagemAtividade;
        }
        public function __toString(){
            return "idAtividade: " . $this->idAtividade . 
                   " descAtividade: " . $this->descAtividade . 
                   " imagemAtividade: " . $this->imagemAtividade .
                   "<br><br>";
        } 
    }
?>