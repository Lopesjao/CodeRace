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
            <form action="Controle/userexists.php" method="post">

                <label >Quantas horas por dia você passa em frente de um dispositivo movel:</label><br>
                <input type="radio" name="celular" value="1" required>Não Uso<br/>
                <input type="radio" name="celular" value="2" required>Menos de 2 horas<br/>
                <input type="radio" name="celular" value="3" required>2-4 horas<br/>
                <input type="radio" name="celular" value="4" required>4-6 horas<br/>
                <input type="radio" name="celular" value="5" required>Mais de 6 horas<<br/>

                <label >Quantas horas por dia você passa em frente de uma Televisão:</label><br>
                <input type="radio" name="tv" value="1" required>Não Uso<br/>
                <input type="radio" name="tv" value="2" required>Menos de 2 horas<br/>
                <input type="radio" name="tv" value="3" required>2-4 horas<br/>
                <input type="radio" name="tv" value="4" required>4-6 horas<br/>
                <input type="radio" name="tv" value="5" required>Mais de 6 horas<<br/>

                <label >Quantas horas por dia você passa em frente de um Computador:</label><br>
                <input type="radio" name="pc" value="1" required>Não Uso<br/>
                <input type="radio" name="pc" value="2" required>Menos de 2 horas<br/>
                <input type="radio" name="pc" value="3" required>2-4 horas<br/>
                <input type="radio" name="pc" value="4" required>4-6 horas<br/>
                <input type="radio" name="pc" value="5" required>Mais de 6 horas<<br/>

                <label >Quantas horas por dia você passa em frente de um Video Game:</label><br>
                <input type="radio" name="game" value="1" required>Não Uso<br/>
                <input type="radio" name="game" value="2" required>Menos de 2 horas<br/>
                <input type="radio" name="game" value="3" required>2-4 horas<br/>
                <input type="radio" name="game" value="4" required>4-6 horas<br/>
                <input type="radio" name="game" value="5" required>Mais de 6 horas<<br/>

                <input href="./index.php" type="submit" value="Cadastrar">
            </form>
        </div>

    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>