<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
?>
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
            <form action="TelaQuestionario.php" method="post" enctype="multipart/form-data">
                <label >Descrição Atividade:</label><br>
                <input type="text" id="descAtividade" name="descAtividade" required><br>

                <label>Imagem da atividade</label>
                <input id="Imagem" type="file" class="form-control" />
                <input href="TelaQuestionario.php" type="submit" value="Cadastrar"> <!-- Arrumar A rota  -->
            </form>
        </div>

    </div>

    <script src="<?=HOME?>src/View/JavaScript/JavaScriptComandos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>