<?php

$app->get("/about", function () use($app) {
    //$sections = \app\models\Section::listar();

    $dados = array(
        'pagina' => 'form',
    );
    $app->render('layout.php', $dados);
});

$app->post("/cadastrar", function () use($app) {
    $nomeCompleto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $radioSim = filter_input(INPUT_POST, 'radioSim', FILTER_SANITIZE_STRING);
    $trabalhando = ($radioSim == 1) ? 1 : 0;
    $classeCliente = new \app\classes\Cliente();
    $classeCliente->setNomeCompleto($nomeCompleto);
    $classeCliente->setTelefone($telefone);
    $classeCliente->setCelular($celular);
    $classeCliente->setEmail($email);
    $classeCliente->setTrabalhando($trabalhando);
    $classeCliente->CadastrarCliente();
        $dados = array(
            'pagina' => 'form',
            'sucesso' => "Cadastrado com sucesso, em breve você receberá notícias. <br>Fique atento!"
        );
    $app->render('layoutAdmin.php', $dados);
});