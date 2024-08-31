<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>OnLife - Desconecte para Conectar</title>
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

    .main-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .main-content h1 {
        font-size: 28px;
        margin: 0;
        padding: 0 10px;
        color: #000000;
    }

    .main-content h1 .corazul {
        color: #00b0f0;
    }

    .main-content h1 .corverde {
        color: #7fd32d;
    }

    .quote {
        font-size: 20px;
        font-style: italic;
        color: #555;
        margin-bottom: 5px;
    }

    .quote-author {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    footer {
        display: center;
        justify-content: space-between;
        width: 100%;
        padding: 20px;
        font-size: 14px;
    }

    a {
        text-decoration: none;
        color: #000000;
    }
  
  .diretorio {
    position: absolute;
    top: 85px;
    left: 50%;
    transform: translateX(-50%);
    width: auto;
    text-align: center;
  }
  
  .diretorio img {
    width: 1000px; 
    height: auto;
    border: 2px solid #333;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    transition: transform 0.3s ease; 
  }
  
  .diretorio img:hover {
    transform: scale(1.05);
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
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Login">Logar</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Cadastro">Cadastrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

        <div class="container">
            <div class="diretorio" style="width: 50%;">
                <br><br>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="src/View/img/logo.png" class="d-block w-100" alt="Logo">
                        </div>
                    </div>
                </div>

            <br>
            <div class="container">
            <div class="main-content"> 
                <h1>Ajudamos você a se <span class="corazul">desconectar</span> para (re)<span class="corazul">Conectar</span> com o mais importante... sua <span class="corverde">vida</span></h1> <p>Nós entendemos a importância do equilíbrio entre o uso da tecnologia e a vida pessoal. A OnLife foi criada para auxiliar pessoas a diminuírem seu tempo de tela, promovendo uma conexão mais saudável com o mundo ao seu redor. Estamos aqui para ajudar você a reconquistar momentos significativos fora das telas digitais.</p> </div>

                <br>

                <div id="msg">
                    <p class="quote">Citação do dia</p>
                    <p class="quote">A persistência é o caminho do êxito.</p>
                    <p class="quote-author">Charles Chaplin</p>
                </div>

            </div>
        </div>
    
    <script src="<?=HOME?>src/View/JavaScript/JavaScriptComandos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>
