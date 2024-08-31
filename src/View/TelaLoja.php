<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Loja Virtual</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            text-align: center;
        }

        .navbar-brand img {
            width: 150px;
            height: auto;
        }

        .main-content {
            padding: 20px;
        }

        .product-card {
            margin-bottom: 20px;
        }

        .carousel-item img {
            max-height: 300px;
            object-fit: cover;
        }

        footer {
            padding: 20px;
            font-size: 14px;
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=HOME?>Home">
                    <img src="src/View/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php if(isset($_SESSION["idUser"])): ?>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>VerAtividade">Atividades</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sobre">Sobre nós</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Contato">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Perfil">Perfil</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Loja">Loja</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sair">Sair</a></li>
                        <?php else: ?>
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

  
       
        <div class="container my-4">
            <h2>Produtos em Destaque</h2>
            <div class="row">
                <div class="col-md-4 product-card">
                    <div class="card">
                        <img src="src/View/img/livro2.jpg" class="card-img-top product-image" alt="Produto 1">
                        <div class="card-body">
                            <h5 class="card-title">Produto 1</h5>
                            <p class="card-text">Descrição breve do produto 1.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-card">
                    <div class="card">
                        <img src="src/View/img/garrafa.jpg" class="card-img-top product-image" alt="Produto 2">
                        <div class="card-body">
                            <h5 class="card-title">Produto 2</h5>
                            <p class="card-text">Descrição breve do produto 2.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-card">
                    <div class="card">
                        <img src="src/View/img/camiseta.jpg" class="card-img-top product-image" alt="Produto 3">
                        <div class="card-body">
                            <h5 class="card-title">Produto 3</h5>
                            <p class="card-text">Descrição breve do produto 3.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Loja Virtual. Todos os direitos reservados.</p>
    </footer>

    <script src="<?=HOME?>src/View/JavaScript/JavaScriptComandos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>
