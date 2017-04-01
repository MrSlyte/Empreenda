<?php

$app->get("/logar", function () use($app) {
    $classeLogin = new \app\classes\Login();
    $classeLogin->setUsername("leo");
    $classeLogin->setSenha('123');
    $retorno = $classeLogin->Login();
    $retorno = "sua mãe";
    $dados = array(
        'pagina' => 'loginAdmin',
        'retorno' => $retorno
    );
    $app->render('layoutAdmin.php', $dados);
});
