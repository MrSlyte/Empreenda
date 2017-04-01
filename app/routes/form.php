<?php

$app->get("/about", function () use($app) {
    //$sections = \app\models\Section::listar();

    $dados = array(
        'pagina' => 'form',
    );
    $app->render('layout.php', $dados);
});
