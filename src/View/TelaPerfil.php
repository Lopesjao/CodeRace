<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    include_once __DIR__ . '/../Conexao/Conexao.php';
    include_once __DIR__ .'/../Model/user.php';
    include_once __DIR__ .'/../Controller/DAOUser.php';
    include_once __DIR__ .'/../Controller/DAOCarteira.php';
    include_once __DIR__ .'/../Model/Carteira.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $daouser = new DAOUser();
    $retorn = $daouser->selectID($_SESSION["idUser"]);
    $user= new User($retorn[0]);
    $daocarteira = new DAOCarteira();
    $return2 = $daocarteira->selectFK($_SESSION["idUser"]);
    $carteira = new Carteira($return2[0]);
    
//idUser	
//nome	
//dataNasc	
//senha	
//email	
//grauVicio

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                            <?php if(isset($_SESSION["idUser"])): ?>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>VerAtividade">Atividades</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sobre">Sobre nós</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Contato">Contato</a></li>
                                <li class="nav-item"><a class="nav-link active" href="<?=HOME?>Perfil">Perfil</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=HOME?>Sair">Sair</a></li>
                            <?php endif; ?>
                            <?php if(!isset($_SESSION["idUser"])): ?>
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
    </section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if ($user): ?>
                    <div class="card">
                        <div class="card-header">
                            <h3>Perfil do Usuário</h3>
                        </div>
                        <div class="card-body">
                            <p><strong>Nome:</strong> <?= htmlspecialchars($user->getNome()) ?></p>
                            <p><strong>Email:</strong> <?= htmlspecialchars($user->getEmail()) ?></p>
                            <p><strong>Data de Nascimento:</strong> <?= htmlspecialchars($user->getDataNasc()) ?></p>
                            <p><strong>Grau de Vício:</strong> <?= htmlspecialchars($user->getGrauVicio()) ?></p>
                            <p><strong>Moeda:</strong> <?= htmlspecialchars($carteira->getmoedaAtual()) ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger" role="alert">
                        Usuário não encontrado!
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>