<?php
    include_once __DIR__ . '/../Rotas/Constantes.php';
    include_once __DIR__ . '/../Conexao/Conexao.php';
    include_once __DIR__ .'/../Model/user.php';
    include_once __DIR__ .'/../Controller/DAOUser.php';
    include_once __DIR__ .'/../Controller/DAOCarteira.php';
    include_once __DIR__ .'/../Model/Carteira.php';

    session_start();
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