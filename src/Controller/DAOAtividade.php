<?php 
    include_once __DIR__ .'/../Conexao/Conexao.php';
    include_once __DIR__ .'/../Model/Atividade.php';
    class DAOAtividade{
        private $conexao;
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }
        public function insertAtividade(Atividade $Atividade){
            $pstmt = $this->conexao->prepare("INSERT INTO atividade 
            (descAtividade, imagemAtividade) VALUES (?, ?)");
            $pstmt->bindValue(1, $Atividade->getDescAtividade());
            $pstmt->bindValue(2, $Atividade->getImagemAtividade());
            $pstmt->execute();
            return $pstmt;
        }
        public function selectAllAtividade(){
            $pstmt = $this->conexao->prepare("SELECT * FROM atividade");
            $pstmt->execute();
            $lista = $pstmt->fetchAll(PDO::FETCH_CLASS, Atividade::class);
            return $lista;
        }
        public function deleteAtividade($idAtividade){
            $pstmt = $this->conexao->prepare("DELETE FROM atividade WHERE idAtividade = ?");
            $pstmt->bindValue(1, $idAtividade);
            $pstmt->execute();
            return $pstmt;
        }  
        public function updateAtividade(Atividade $Atividade){
            $pstmt = $this->conexao->prepare("UPDATE atividade SET descAtividade = ?, imagemAtividade = ?
            WHERE idAtividade = ?");
            $pstmt->bindValue(1, $Atividade->getDescAtividade());
            $pstmt->bindValue(2, $Atividade->getImagemAtividade());
            $pstmt->bindValue(3, $Atividade->getIdAtividade());
            $pstmt->execute();
            return $pstmt;
        } 
    }
?>