<?php

$app->get("/", function () use($app) {
    //$sections = \app\models\Section::listar();

    $dados = array(
        'pagina' => 'home',
    );
    $app->render('layout.php', $dados);
});
