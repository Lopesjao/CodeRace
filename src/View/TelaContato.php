<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLife - Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
                            <?php if(isset($_SESSION["idUser"])): ?>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>VerAtividade">Atividades</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sobre">Sobre nós</a></li>
                                <li class="nav-item"><a class="nav-link active" href="<?=HOME?>Contato">Contato</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Perfil">Perfil</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sair">Sair</a></li>
                            <?php endif; ?>
                            <?php if(!isset($_SESSION["idUser"])): ?>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sobre">Sobre nós</a></li>
                            <li class="nav-item"><a class="nav-link active" href="<?=HOME?>Contato">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Login">Logar</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Cadastro">Cadastrar</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4">Fale Conosco</h1>
                <p class="lead mt-4">Estamos aqui para ajudar! Se você tiver alguma dúvida, sugestão ou precisar de suporte, entre em contato conosco através do formulário abaixo.</p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form>
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Seu nome">
                        <br>
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Seu e-mail">
                        <br>
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="5" placeholder="Digite sua mensagem"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
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


