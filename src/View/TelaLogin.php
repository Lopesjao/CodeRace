<?php

    
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

    <br>

<div class="container" style="width: 40%;">
<form align="center" method="POST" action="TelaLogin.php">
    <h2>LOGIN</h2>
    <br>
    <label for="apelido"> Apelido </label>
    <input 
        type="text" 
        name="apelido" 
        id="apelido" 
        class="form-control" 
        pattern="[A-Za-z-0-9., -]{4,255}$"
        oninvalid="setCustomValidity('Por favor, insira pelo menos 4 letras!')">

    <br>

    <label for="senha"> Senha </label>
    <input 
        type="password" 
        id="senha" 
        name="senha" 
        class="form-control" 
        pattern="^.{6,15}$"
        title="Senha com no minímo 6 caracteres de letras e números">
                                    
    <br>

    <label> <a href="TelaCadUser.php"> Não possui cadastro? </a> </label> 
    <br><br>
    <button 
        type="submit" 
        name="cadastrar" 
        class="btn btn-primary"
        >Entrar</button>
</form>

</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>