<?php 
    include_once __DIR__ .'/../Conexao/Conexao.php';
    include_once __DIR__ .'/../Model/Tarefas.php';
    class DAOTarefas{
        private $conexao;
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }
        public function insertTarefas(Tarefas $Tarefas){
            $pstmt = $this->conexao->prepare("INSERT INTO tarefas 
            (fkUser, fkAtividade, moedaRecebida, dataConcluida, tempo) VALUES (?, ?, ?, ?, ?)");
            $pstmt->bindValue(1, $Tarefas->getFkUser());
            $pstmt->bindValue(2, $Tarefas->getFkAtividade());
            $pstmt->bindValue(3, $Tarefas->getMoedaRecebida());
            $pstmt->bindValue(4, $Tarefas->getDataConcluida());
            $pstmt->bindValue(5, $Tarefas->getTempo());
            $pstmt->execute();
            return $pstmt;
        }
        public function selectAllTarefas(){
            $pstmt = $this->conexao->prepare("SELECT * FROM tarefas");
            $pstmt->execute();
            $lista = $pstmt->fetchAll(PDO::FETCH_CLASS, Tarefas::class);
            return $lista;
        }
        public function deleteTarefas($idTarefas){
            $pstmt = $this->conexao->prepare("DELETE FROM tarefas WHERE idTarefas = ?");
            $pstmt->bindValue(1, $idTarefas);
            $pstmt->execute();
            return $pstmt;
        }  
        public function updateTarefas(Tarefas $Tarefas){
            $pstmt = $this->conexao->prepare("UPDATE registrologin SET moedaRecebida = ?, dataConcluida = ?, tempo = ?
            WHERE idTarefas = ?");
            $pstmt->bindValue(1, $Tarefas->getMoedaRecebida());
            $pstmt->bindValue(2, $Tarefas->getDataConcluida());
            $pstmt->bindValue(3, $Tarefas->getTempo());
            $pstmt->bindValue(3, $Tarefas->getIdTarefas());
            $pstmt->execute();
            return $pstmt;
        } 
    }
?>