<?php

$app->post("/logar", function () use($app) {
    $classeLogin = new \app\classes\Login();
    $classeLogin->setUsername(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $classeLogin->setSenha(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    $result = $classeLogin->Login();
    if ($result != null):
        $_SESSION['UserDataId'] = $result->admin_id;
        $_SESSION['UserDataNome'] = $result->admin_name;
        $dados = array(
            'pagina' => 'homeAdmin'
        );
    else:
        $dados = array(
            'pagina' => 'loginAdmin'
        );
    endif;
    $app->render('layoutAdmin.php', $dados);
});
