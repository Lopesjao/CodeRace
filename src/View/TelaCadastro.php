<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="form-container">
            <h2>Cadastro</h2>
            <form action="Controle/userexists.php" method="post">
                <label >Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br>
                <label >Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label >Senha:</label><br>
                <input type="password" id="senha" name="senha" required><br>
                <label >Data Nascimento:</label><br>
                <input type="text" id="dataNasc" name="cidade"><br>
                <input href="./index.php" type="submit" value="Cadastrar">
            </form>
        </div>

    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>