<?php

$app->get("/admin", function () use($app) {
    if (\app\classes\session::sessaoExiste("logado")) {
        $dados = array(
            'pagina' => 'homeAdmin',
        );
    } else {
        $dados = array(
            'pagina' => 'loginAdmin',
        );
    }
    $app->render('layoutAdmin.php', $dados);
});

