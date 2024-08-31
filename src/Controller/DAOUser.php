<?php
include_once __DIR__ .'/../Model/User.php';
include_once __DIR__ .'/../Conexao/Conexao.php';
class DAOUser{

    private $conexao;
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }
    public function insertUser(User $user){
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
    public function selectUserVerfica($email){
        $pstmt = $this->conexao->prepare("SELECT * FROM user WHERE email = ?");
        $pstmt->bindValue(1, $email);
        $pstmt->execute();
        if ($pstmt->rowCount() > 0) {
            $user = $pstmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["idUser"] = $user['idUser'];
            return true;
        } else {
            return false;
        }
    }

    public function selectUserVerficaLogin($email, $senha){
        // Verifica se o email existe
        $pstmt = $this->conexao->prepare("SELECT * FROM user WHERE email = ?");
        $pstmt->bindValue(1, $email);
        $pstmt->execute();
    
        if ($pstmt->rowCount() > 0) {
            // Se o email existe, verificar a senha
            $user = $pstmt->fetch(PDO::FETCH_ASSOC);
            
            // Use password_verify para comparar a senha
            if ($senha == $user['senha']) {
                $_SESSION["idUser"] = $user['idUser'];
                return true; // Login bem-sucedido
            } else {
                return "senha_incorreta"; // Senha incorreta
            }
        } else {
            return "email_nao_encontrado"; // Email não encontrado
        }
    }

    public function selectAllUser(){
        $pstmt = $this->conexao->prepare("SELECT * FROM user");
        $pstmt->execute();
        $lista = $pstmt->fetchAll(PDO::FETCH_CLASS, User::class);
        return $lista;
    }

    public function deleteUser(){
        $idUser = $_POST['idUser'];
        $pstmt = $this->conexao->prepare("DELETE FROM user WHERE idUser = ?");
        $pstmt->bindValue(1, $idUser);
        unset($_SESSION["login"]);
        unset($_SESSION["senha"]);
        echo json_encode($pstmt->execute());
    }  

    
}




?>