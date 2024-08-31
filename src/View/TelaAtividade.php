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
    <title>Cadastro de Atividade</title>
    <style>
        body {
            background-color: #f8f9fa; /* Fundo claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 1.5rem;
            color: #343a40;
        }
        label {
            margin-top: 0.5rem;
        }
        input[type="text"], input[type="file"] {
            margin-bottom: 1rem;
        }
        .btn-primary {
            width: 100%;
            padding: 0.75rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Cadastro de Atividade</h2>
            <form action="TelaQuestionario.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="descAtividade" class="form-label">Descrição da Atividade:</label>
                    <input type="text" id="descAtividade" name="descAtividade" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="Imagem" class="form-label">Imagem da Atividade:</label>
                    <input id="Imagem" type="file" name="Imagem" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="<?=HOME?>src/View/JavaScript/JavaScriptComandos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
