<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    include_once __DIR__ . '/../Conexao/Conexao.php';
    include_once __DIR__ .'/../Model/Carteira.php';
    include_once __DIR__ .'/../Controller/DAOUser.php';
    include_once __DIR__ .'/../Controller/DAOCarteira.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST['enviar'])) {
        $_SESSION["idUser"];
        $daocarteira = new DAOCarteira();
        $daocarteira->insertCarteira($_SESSION["idUser"], 500);
        header("Location: " . HOME . "Perfil");
        
    }
?>