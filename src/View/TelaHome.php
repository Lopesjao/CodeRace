<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLife - Desconecte para Conectar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 20px;
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

        .main-content h1 span {
            color: #00b0f0;
        }

        .main-content h1 .highlight {
            color: #7fd32d;
        }

        footer {
            display: flex;
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
    <header>
        <div class="logo">On<span>Life</span></div>
        <button class="login-button">Login</button>
    </header>

    <div class="main-content">
        <h1>Ajudamos você a se <span>desconectar</span> para (re)<span>Conectar</span> com o mais importante... sua <span class="highlight">vida</span></h1>
        <p>Nós entendemos a importância do equilíbrio entre o uso da tecnologia e a vida pessoal. O OnLife foi criado para auxiliar pessoas a diminuírem seu tempo de tela, promovendo uma conexão mais saudável com o mundo ao seu redor. Estamos aqui para ajudar você a reconquistar momentos significativos fora das telas digitais.</p>
    </div>

    <footer>
        <a href="#">Sobre nós</a>
        <span>Copyright 2024</span>
        <a href="#">Contato</a>
    </footer>
</body>
</html>
