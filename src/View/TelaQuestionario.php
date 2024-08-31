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

    echo $_SESSION["nome"];
    echo $_SESSION["senha"];
    echo $_SESSION["email"];
    echo $_SESSION["dataNasc"];
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
<div class="container">
    <div class="form-container">
            <h2>Cadastro sei la</h2>
            <form action="<?=HOME?>teste" method="post">

                <label >Quantas horas por dia você passa em frente de um dispositivo movel:</label><br>
                <input type="radio" name="celular" value="0" required>Não Uso<br/>
                <input type="radio" name="celular" value="5" required>Menos de 2 horas<br/>
                <input type="radio" name="celular" value="10" required>2-4 horas<br/>
                <input type="radio" name="celular" value="15" required>4-6 horas<br/>
                <input type="radio" name="celular" value="20" required>Mais de 6 horas<br/>

                <label >Quantas horas por dia você passa em frente de uma Televisão:</label><br>
                <input type="radio" name="tv" value="0" required>Não Uso<br/>
                <input type="radio" name="tv" value="5" required>Menos de 2 horas<br/>
                <input type="radio" name="tv" value="10" required>2-4 horas<br/>
                <input type="radio" name="tv" value="15" required>4-6 horas<br/>
                <input type="radio" name="tv" value="20" required>Mais de 6 horas<br/>

                <label >Quantas horas por dia você passa em frente de um Computador:</label><br>
                <input type="radio" name="pc" value="0" required>Não Uso<br/>
                <input type="radio" name="pc" value="5" required>Menos de 2 horas<br/>
                <input type="radio" name="pc" value="10" required>2-4 horas<br/>
                <input type="radio" name="pc" value="15" required>4-6 horas<br/>
                <input type="radio" name="pc" value="20" required>Mais de 6 horas<br/>

                <label >Quantas horas por dia você passa em frente de um Video Game:</label><br>
                <input type="radio" name="game" value="0" required>Não Uso<br/>
                <input type="radio" name="game" value="5" required>Menos de 2 horas<br/>
                <input type="radio" name="game" value="10" required>2-4 horas<br/>
                <input type="radio" name="game" value="15" required>4-6 horas<br/>
                <input type="radio" name="game" value="20" required>Mais de 6 horas<br/>

                <input type="submit" name="Cadastrar22" value="Cadastrar22">
            </form>
        </div>

    </div>
    <script src="<?=HOME?>src/View/JavaScript/JavaScriptComandos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>