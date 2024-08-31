<?php
    include_once __DIR__ .'/Rotas.php';

    Rotas::add('/', 'View/Teste.php');
    Rotas::add('/Home', 'View/Home.php');


    Rotas::add('/Login', 'View/TelaLogin.php');
    Rotas::add('/Cadastro', 'View/TelaCadastro.php');
    Rotas::add('/Questionario', 'View/TelaQuestionario.php');
    Rotas::add('/Sair', 'View/TelaSair.php');

    Rotas::add('/Perfil', 'View/TelaPerfil.php');

    Rotas::add('/Graficos', 'View/Graficos.php');
    Rotas::add('/GerarPDF', 'View/Gera_PDF.php');
    Rotas::add('/Resposta', 'View/Gerar_pdf.php');
    Rotas::add('/teste', 'View/teste.php');
    Rotas::add('/Anotacao_Historico', 'View/AnotacaoHist.php');
    Rotas::addGetInt('/Anotacao', 'View/Anotacao.php', 'IdDado');
    Rotas::addGet('/controller', 'Controller/FunctionController.php', 'function');

    Rotas::addGet('/home', 'View/home.php', 'toast');
    Rotas::addGetInt('/excluir', 'View/excluir.php', 'id');

    Rotas::erro('View/404.php');
    Rotas::exec();
?>

