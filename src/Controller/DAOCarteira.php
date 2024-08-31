<?php 
    include_once __DIR__ .'/../Conexao/Conexao.php';
    include_once __DIR__ .'/../Model/Carteira.php';
    class DAOCarteira{
        private $conexao;
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }
        public function insertCarteira($fk,$moeda){
            $pstmt = $this->conexao->prepare("INSERT INTO carteira 
            (fkUser, moedaRecebida, moedaAtual) VALUES (?, ?, ?)");
            $pstmt->bindValue(1, $fk);
            $pstmt->bindValue(2, $moeda);
            $pstmt->bindValue(3, $moeda);
            $pstmt->execute();
            return $pstmt;
        }
        public function selectAllCarteira(){
            $pstmt = $this->conexao->prepare("SELECT * FROM carteira");
            $pstmt->execute();
            $lista = $pstmt->fetchAll(PDO::FETCH_CLASS, Carteira::class);
            return $lista;
        }
        public function deleteCarteira($idCarteira){
            $pstmt = $this->conexao->prepare("DELETE FROM carteira WHERE idCarteira = ?");
            $pstmt->bindValue(1, $idCarteira);
            $pstmt->execute();
            return $pstmt;
        }  
        public function selectFK($fkuser){
            $pstmt = $this->conexao->prepare("SELECT * FROM carteira WHERE fkUser = ?");
            $pstmt->bindValue(1, $fkuser);
            $pstmt->execute();
            $lista = $pstmt->fetchAll(PDO::FETCH_CLASS, Carteira::class);
            return $lista;
        }  
        public function updateCarteira(Carteira $Carteira){
            $pstmt = $this->conexao->prepare("UPDATE carteira SET moedaRecebida = ?, moedaAtual = ?
            WHERE idCarteira = ?");
            $pstmt->bindValue(1, $Carteira->getMoedaRecebida());
            $pstmt->bindValue(2, $Carteira->getmoedaAtual());
            $pstmt->bindValue(3, $Carteira->getIdCarteira());
            $pstmt->execute();
            return $pstmt;
        } 
    }
?>