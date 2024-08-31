<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLife - Sobre Nós</title>
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
                            <li class="nav-item"><a class="nav-link active" href="<?=HOME?>Sobre">Sobre nós</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Contato">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Login">Logar</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Contato">Cadastrar</a></li>
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
                <h1 class="display-4">Sobre Nós</h1>
                <p class="lead mt-4">A OnLife é uma plataforma criada com o objetivo de promover o equilíbrio entre a vida digital e o mundo real. Compreendemos a importância de desconectar das telas para se reconectar com o que realmente importa: a sua vida e os seus relacionamentos. Nossa missão é auxiliar as pessoas a reduzirem o tempo excessivo de uso de dispositivos digitais, incentivando práticas mais saudáveis e conscientes.</p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <h2>Missão</h2>
                <p>Proporcionar um ambiente que encoraje nossos usuários a diminuírem o tempo de tela, oferecendo recomendações diárias de atividades que promovem bem-estar e equilíbrio.</p>
            </div>
            <div class="col-md-4">
                <h2>Visão</h2>
                <p>Ser referência global na promoção de um estilo de vida equilibrado, onde o uso da tecnologia é feito de maneira consciente, beneficiando tanto a saúde mental quanto física dos nossos usuários.</p>
            </div>
            <div class="col-md-4">
                <h2>Valores</h2>
                <ul>
                    <li><strong>Saúde e Bem-Estar:</strong> Priorizamos a saúde mental e física, incentivando práticas que melhorem a qualidade de vida.</li>
                    <li><strong>Inovação:</strong> Buscamos constantemente novas maneiras de ajudar nossos usuários a alcançarem o equilíbrio entre a vida digital e real.</li>
                    <li><strong>Comunidade:</strong> Valorizamos a colaboração e o apoio mútuo, trabalhando com parceiros que compartilham nossos objetivos.</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <h2 class="text-center">Nossa Proposta</h2>
                <p class="lead text-center mt-4">Através da nossa plataforma, oferecemos recomendações diárias de atividades que incentivam a desconexão saudável das telas. Além disso, introduzimos um sistema de pontuação, onde cada ação positiva que promove o bem-estar é recompensada com nossa moeda digital. Esses pontos podem ser trocados por brindes e prêmios exclusivos oferecidos por nossos patrocinadores parceiros, que acreditam na nossa missão de criar um mundo mais equilibrado e saudável.</p>
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








