<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>OnLife - Atividades</title>
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
                                <li class="nav-item"><a class="nav-link active" href="<?=HOME?>VerAtividade">Atividades</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sobre">Sobre nós</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Contato">Contato</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Perfil">Perfil</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sair">Sair</a></li>
                            <?php endif; ?>
                            <?php if(!isset($_SESSION["idUser"])): ?>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sobre">Sobre nós</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Contato">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Login">Logar</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Cadastro">Cadastrar</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </sectio>

    <div class="container text-center my-5">
        <h2>Sugestões de Atividades do Dia</h2>
        <div class="row mt-5">
            <div class="col-md-4">
                <h4>Corrida ao Ar Livre</h4>
                <img src="src/View/img/corrida.jpg" alt="Imagem da Atividade 1" class="img-fluid mb-2" style="width: 100%; height: auto; background-color: #0044cc; color: white; line-height: 150px;">
                <p>Coloque seus fones de ouvido, escolha sua playlist favorita e vá para uma corrida ao ar livre. Além de melhorar sua saúde física, a corrida ajuda a reduzir o estresse e proporciona uma sensação de liberdade.</p>
                <a href="<?=HOME?>Corrida" class="btn btn-primary">Começar Atividade</a>
            </div>
            <div class="col-md-4">
                <h4>Leitura de um Capítulo de Livro</h4>
                <img src="src/View/img/livro.jpg" alt="Imagem da Atividade 2" class="img-fluid mb-2" style="width: 100%; height: auto; background-color: #0044cc; color: white; line-height: 150px;">
                <p>Escolha um livro que você está interessado e se permita mergulhar em uma nova história ou aprender algo novo. Dedique 30 minutos do seu dia para ler um capítulo e desfrute do prazer da leitura.</p>
                <a href="<?=HOME?>Livro" class="btn btn-primary">Começar Atividade</a>
            </div>
            <div class="col-md-4">
                <h4>Sessão de Alongamento</h4>
                <img src="src/View/img/along.jpg" alt="Imagem da Atividade 3" class="img-fluid mb-2" style="width: 100%; height: auto; background-color: #0044cc; color: white; line-height: 150px;">
                <p>Reserve alguns minutos para se alongar e liberar a tensão acumulada. O alongamento melhora a flexibilidade, alivia dores musculares e aumenta a circulação sanguínea, proporcionando uma sensação de bem-estar.</p>
                <a href="<?=HOME?>Along" class="btn btn-primary">Começar Atividade</a>
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
