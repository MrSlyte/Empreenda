<?php

$app->notFound(function () use ($app) { 
    $dados = array(
        'pagina' => 'error404',
    );
    $app->render('layout.php', $dados); 
});