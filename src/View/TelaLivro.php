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
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 20px;
            font-size: 14px;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        .timer {
            font-size: 2em;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .btn {
            margin: 5px;
        }

        .message {
            margin-top: 20px;
            font-size: 1.5em;
            color: green;
        }
    </style>
</head>
<body>
    <section class="section-inicio">
        <header class="header-inicio">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="<?=HOME?>Home">
                    <img src="src/View/img/logo.png" alt="Logo" width="100%" height="70" class="d-inline-block align-text-top">
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
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Loja">Loja</a></li>
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
    </section>

    <div class="container text-center my-5">
        <h2>Atividade Selecionada</h2>
        <div class="row mt-5 justify-content-center">
        <div class="col-md-4 mx-auto">
                <h4>Leitura de um Capítulo de Livro</h4>
                <img src="src/View/img/livro.jpg" alt="Imagem da Atividade 2" class="img-fluid mb-2" style="width: 100%; height: auto;">
                <p>Escolha um livro que você está interessado e se permita mergulhar em uma nova história ou aprender algo novo. Dedique 30 minutos do seu dia para ler um capítulo e desfrute do prazer da leitura.</p>
                <div class="timer" id="timer">00:00:00</div>
                <button id="startPauseBtn" class="btn btn-success">Iniciar Atividade</button>
                <button id="finalizeBtn" class="btn btn-danger" disabled>Finalizar Atividade</button>
                <form method="POST" action="<?=HOME?>TesteAtividade">
                    <button type="submit" id="enviar" name="enviar" class="btn btn-danger">Enviar</button>
                </form>
                <div id="message" class="message" style="display:none;">Atividade finalizada com sucesso!</div>
            </div>
        </div>
    </div>

    <footer>
        <span>Copyright 2024</span>
    </footer>

    <script>
        let timerInterval;
        let elapsedTime = 0;
        let isRunning = false;

        const startPauseBtn = document.getElementById('startPauseBtn');
        const finalizeBtn = document.getElementById('finalizeBtn');
        const timerDisplay = document.getElementById('timer');
        const message = document.getElementById('message');

        function startPauseTimer() {
            if (isRunning) {
                clearInterval(timerInterval);
                startPauseBtn.textContent = "Retomar Atividade";
            } else {
                const startTime = Date.now() - elapsedTime;
                timerInterval = setInterval(() => {
                    elapsedTime = Date.now() - startTime;
                    timerDisplay.textContent = timeToString(elapsedTime);
                }, 1000);
                startPauseBtn.textContent = "Pausar Atividade";
            }
            isRunning = !isRunning;
            finalizeBtn.disabled = false;
        }

        function finalizeTimer() {
            clearInterval(timerInterval);
            startPauseBtn.disabled = true;
            finalizeBtn.disabled = true;
            message.style.display = "block";
        }

        function timeToString(time) {
            let diffInHrs = time / 3600000;
            let hh = Math.floor(diffInHrs);

            let diffInMin = (diffInHrs - hh) * 60;
            let mm = Math.floor(diffInMin);

            let diffInSec = (diffInMin - mm) * 60;
            let ss = Math.floor(diffInSec);

            let formattedHH = hh.toString().padStart(2, "0");
            let formattedMM = mm.toString().padStart(2, "0");
            let formattedSS = ss.toString().padStart(2, "0");

            return `${formattedHH}:${formattedMM}:${formattedSS}`;
        }

        startPauseBtn.addEventListener('click', startPauseTimer);
        finalizeBtn.addEventListener('click', finalizeTimer);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
