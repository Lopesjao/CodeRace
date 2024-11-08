<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    include_once __DIR__ . "/../Controller/DAOUser.php";
    include_once __DIR__ . "/../Model/User.php";
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_POST['entrar'])) {
        $daouser1 = new DAOUser();
        $loginStatus = $daouser1->selectUserVerficaLogin($_POST['email'], $_POST['senha']);
        $_SESSION["email"] = $_POST['email'];
    
        if ($loginStatus === true) {
            // Login bem-sucedido
            header("Location: " . HOME . "VerAtividade");
        } else if ($loginStatus === "senha_incorreta") {
            echo "<script>alert('Senha incorreta!'); window.location.href = '/CodeRace/Login';</script>";
        } else if ($loginStatus === "email_nao_encontrado") {
            echo "<script>alert('Email não encontrado!'); window.location.href = '/CodeRace/Login';</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>OnLife - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        
        footer {
            display: center;
            justify-content: space-between;
            width: 100%;
            padding: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <section class="section-inicio">
        <header class="header-inicio">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="<?=HOME?>Home">
                    <img src="src/View/img/logo.png" alt="Logo" width="100% " height="70" class="d-inline-block align-text-top">
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sobre">Sobre nós</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Contato">Contato</a></li>
                            <li class="nav-item"><a class="nav-link active" href="<?=HOME?>Login">Logar</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Cadastro">Cadastrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <div class="container">

        <br>

        <div class="container" style="width: 60%;">
            <form align="center" method="POST" action="<?=HOME?>Login">
                <h2>LOGIN</h2>
                <br>
                <label for="email"> Email </label>
                <input 
                    type="text" 
                    name="email" 
                    id="email" 
                    class="form-control">

                <br>

                <label for="senha"> Senha </label>
                <input 
                    type="password" 
                    id="senha" 
                    name="senha" 
                    class="form-control">
                                                
                <br>

                <label> <a href="<?=HOME?>Cadastro"> Não possui cadastro? </a> </label> 
                <br><br>
                <button 
                    type="submit" 
                    name="entrar" 
                    class="btn btn-primary"
                    >Entrar</button>
            </form>
        </div>
    </div>
    
    <footer>
        <span>Copyright 2024</span>
    </footer>
    

    <script src="<?=HOME?>src/View/JavaScript/JavaScriptComandos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>