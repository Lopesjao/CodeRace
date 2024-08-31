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

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #000000;
        }

        .logo span {
            color: #7fd32d;
        }

        .login-button {
            background: linear-gradient(90deg, #7fd32d, #00b0f0);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
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
    </style>
</head>
<body>
    <section class="section-inicio">
        <header class="header-inicio">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
				    
                    <a class="navbar-brand" href="TelaHome.php">
                        <div class="logo">On<span>Life</span></div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="TelaCadCompanhia.php">Sobre nós</a></li>
                            <li class="nav-item"><a class="nav-link" href="TelaCadOnibus.php">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="TelaLogin.php">Logar</a></li>
                            <li class="nav-item"><a class="nav-link" href="TelaCadUser.php">Cadastrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <div class="container">
        <div class="main-content">
            <h1>Ajudamos você a se <span class="corazul">desconectar</span> para (re)<span class="corazul">Conectar</span> com o mais importante... sua <span class="corverde">vida</span></h1>
            <p>Nós entendemos a importância do equilíbrio entre o uso da tecnologia e a vida pessoal. O OnLife foi criado para auxiliar pessoas a diminuírem seu tempo de tela, promovendo uma conexão mais saudável com o mundo ao seu redor. Estamos aqui para ajudar você a reconquistar momentos significativos fora das telas digitais.</p>
        </div>
    </div>

    <footer>
        <span>Copyright 2024</span>
    </footer>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>
