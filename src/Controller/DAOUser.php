<?php
include_once __DIR__ .'/../Model/user.php';
include_once __DIR__ .'/../Conexao/Conexao.php';
class DAOUser{

    private $conexao;
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }
    public function insertAnotacao(User $user){
        $pstmt = $this->conexao->prepare("INSERT INTO user 
        (nome, dataNasc, senha, email, grauVicio) VALUES 
        (?,?,?,?,?)");
        $pstmt->bindValue(1, $user->getNome());
        $pstmt->bindValue(2, $user->getDataNasc());
        $pstmt->bindValue(3, $user->getSenha());
        $pstmt->bindValue(4, $user->getEmail());
        $pstmt->bindValue(5, $user->getGrauVicio());
        $pstmt->execute();
        return $pstmt;
    }

}



?>