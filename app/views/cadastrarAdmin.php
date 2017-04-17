

<?php
if (is_null($_SESSION['UserDataId']) || empty($_SESSION['UserDataId']) || $_SESSION['UserDataId'] == 0) {
    header("Location: /");
}
?>
<h2>Bem vindo, <?= $_SESSION['UserDataNome']; ?></h2>

<div class="container">
    <nav>
        <ul>
            <li><a href="/admin">Início</a></li>
            <li><a href="/recebimentos">Contatos recebidos</a></li>
            <li><a href="/administradores">Administradores</a></li>
        </ul>
    </nav>
    <section class="contact">
        <h3>Preencha os campos abaixo</h3>
        <?php
        if (isset($dadosAdmin)):
            $id = 0;
            $nome = "";
            $username = "";
            foreach ($dadosAdmin as $dados):
                $id = $dados->admin_id;
                $nome = $dados->admin_name;
                $username = $dados->admin_username;
            endforeach;

        endif;
        ?>
        <form class="form" method="post" name="formContact" action="<?php echo (isset($dadosAdmin)) ? "/administradores/editar/".$id : "/administradores/cadastrar" ?>">
<?php echo (isset($msg)) ? $msg : ''; ?>
            <p></p>
            <div class="row">
                <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Nome completo:</label>
                        <input type="text" name="nome" value="<?php echo (isset($nome)) ? $nome : '' ?>" class="form-control" placeholder="Digite seu nome completo" <?php echo (!isset($username)) ? 'required' : '' ?>/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Usuário:</label>
                        <input type="text" name="usuario" value="<?php echo (isset($username)) ? $username : '' ?>" class="form-control" placeholder="Digite seu usuário" <?php echo (!isset($username)) ? 'required' : '' ?>/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Senha:</label>
                        <input type="text" name="senha" <?php echo (isset($nome)) ? "placeholder='Sua senha permanece a mesma'" : "placeholder='Digite sua senha'" ?> class="form-control" required/>
                        <p>Atenção: Por questões de segurança, coloque a mesma senha (ou uma nova, caso prefira).</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group btnForm">
                        <input type="submit" name="formSubmit" class="btn btn-primary" value="Cadastrar administrador">
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>