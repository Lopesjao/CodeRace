<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    include_once __DIR__ . '/../Conexao/Conexao.php';
    include_once __DIR__ .'/../Model/user.php';
    include_once __DIR__ .'/../Controller/DAOUser.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST['cadastrar'])) {
        $_SESSION["nome"] = $_POST['nome'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["senha"] = $_POST['senha'];
        $_SESSION["dataNasc"] = $_POST['dataNasc'];
    }

    echo $_SESSION["nome"];
    echo $_SESSION["senha"];
    echo $_SESSION["email"];
    echo $_SESSION["dataNasc"];

    if (isset($_POST['Cadastrar22'])) {

        $user = new User();
        $daouser = new DAOUser();

        $user->setNome($_SESSION["nome"]);
        $user->setEmail($_SESSION["email"]);
        $user->setSenha($_SESSION["senha"]);
        $user->setDataNasc($_SESSION["dataNasc"]);

        $count = 0;
        $count += $_POST['celular'];
        $count += $_POST['tv'];
        $count += $_POST['pc'];
        $count += $_POST['game'];

        $tipograu = "";
        if ($count <= 20) {
            $tipograu = "Baixo";
        } else if ($count <= 50) {
            $tipograu = "Moderado";
        } else {
            $tipograu = "Alto";
        }
echo "<h1>ola";
        $user->setGrauVicio($tipograu);
        $boolean = $daouser->selectUserVerfica($user->getEmail());

        if ($boolean) {
            echo "<script>alert('Email já existente, por favor digite outro!'); window.location.href = '<?=HOME?>Cadastro';</script>";
        } else {
            $daouser->insertUser($user);
            header("Location: " . HOME . "Perfil");
        }
    }
?>