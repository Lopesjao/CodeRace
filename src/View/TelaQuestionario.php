<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    include_once __DIR__ . '/../Conexao/Conexao.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST['cadastrar'])) {
        $_SESSION["nome"] = $_POST['nome'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["senha"] = $_POST['senha'];
        $_SESSION["dataNasc"] = $_POST['dataNasc'];
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

    <title>Questionario Cadastro</title>
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
                            <li class="nav-item"><a class="nav-link active" href="<?=HOME?>Cadastro">Cadastrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>
    <br>
    <div class="container">
            <form align="center" action="<?=HOME?>teste" method="post">
                
                <h2>Cadastro sei la</h2>
                <br>
                <label> Quantas horas por dia você passa em frente de um dispositivo movel </label>
                <br>
                    <input 
                        type="radio" 
                        name="celular" 
                        id="celular" 
                        value="0"
                        required> 
                        Não uso
                    <br/>
                    <input 
                        type="radio" 
                        name="celular" 
                        id="celular" 
                        value="5"
                        required> 
                        Menos de 2 horas
                    <br/>
                    <input 
                        type="radio" 
                        name="celular" 
                        id="celular" 
                        value="10"
                        required> 
                        2-4 horas
                    <br/>
                    <input 
                        type="radio" 
                        name="celular" 
                        id="celular" 
                        value="15"
                        required> 
                        4-6 horas
                    <br/>
                    <input 
                        type="radio" 
                        name="celular" 
                        id="celular" 
                        value="20"
                        required> 
                        Mais de 6 horas
                    <br><br>

                    <label> Quantas horas por dia você passa em frente de uma Televisão </label>
                    <br>
                    <input 
                        type="radio" 
                        name="tv" 
                        id="tv" 
                        value="0"
                        required> 
                        Não uso
                    <br>
                    <input 
                        type="radio" 
                        name="tv" 
                        id="tv" 
                        value="5"
                        required> 
                        Menos de 2 horas
                    <br>
                    <input 
                        type="radio" 
                        name="tv" 
                        id="tv" 
                        value="10"
                        required> 
                        2-4 horas
                    <br>
                    <input 
                        type="radio" 
                        name="tv" 
                        id="tv" 
                        value="15"
                        required> 
                        4-6 horas
                    <br>
                    <input 
                        type="radio" 
                        name="tv" 
                        id="tv" 
                        value="20"
                        required> 
                        Mais de 6 horas
                    <br><br>


                    <label> Quantas horas por dia você passa em frente de um Computador </label>
                    <br>
                    <input 
                        type="radio" 
                        name="pc" 
                        id="pc" 
                        value="0"
                        required> 
                        Não uso
                    <br>
                    <input 
                        type="radio" 
                        name="pc" 
                        id="pc" 
                        value="5"
                        required> 
                        Menos de 2 horas
                    <br>
                    <input 
                        type="radio" 
                        name="pc" 
                        id="pc" 
                        value="10"
                        required> 
                        2-4 horas
                    <br>
                    <input 
                        type="radio" 
                        name="pc" 
                        id="pc" 
                        value="15"
                        required> 
                        4-6 horas
                    <br>
                    <input 
                        type="radio" 
                        name="pc" 
                        id="pc" 
                        value="20"
                        required> 
                        Mais de 6 horas
                    <br><br>


                    <label> Quantas horas por dia você passa em frente de um Video Game </label><br>
                    <input 
                        type="radio" 
                        name="game" 
                        id="game" 
                        value="0"
                        required> 
                        Não uso
                    <br>
                    <input 
                        type="radio" 
                        name="game" 
                        id="game" 
                        value="5"
                        required> 
                        Menos de 2 horas
                    <br>
                    <input 
                        type="radio" 
                        name="game" 
                        id="game" 
                        value="10"
                        required> 
                        2-4 horas
                    <br>
                    <input 
                        type="radio" 
                        name="game" 
                        id="game" 
                        value="15"
                        required> 
                        4-6 horas
                    <br>
                    <input 
                        type="radio" 
                        name="game" 
                        id="game" 
                        value="20"
                        required> 
                        Mais de 6 horas

                    <br><br>
                    <button 
                        type="submit" 
                        name="Cadastrar22" 
                        class="btn btn-primary"
                        value="Cadastrar22"
                        >Cadastrar</button>
            </form>
        </div>

    </div>
    <script src="<?=HOME?>src/View/JavaScript/JavaScriptComandos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>