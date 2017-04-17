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
    <section class="administradores">
        <?php if(isset($msg)):
            echo $msg;
        endif; ?>
    <h3>Aqui vai poder cadastrar, alterar e deletar administradores.</h3>
        <div class="btnCadastrar">
            <a class="btn btn-success" href="/cadastrar">Cadastrar</a>
        </div>
    
    <div class="row">
        <table class="table table-bordered table-striped">
        <thead>
            <tr style="background-color: #000;">
                <th>Nome do administrador</th>
                <th>Status do administrador</th>
                <th>Ação</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody style="color: #000;">
            <?php foreach ($dadosAdmin as $admin): 
                $bloquear = ($admin->admin_ativo == '1') ? "/administradores/bloquear/" : "/administradores/desbloquear/"; ?>
            <tr>
                <td><?php echo $admin->admin_name; ?></td>
                <td><?php echo ($admin->admin_ativo == '1') ? 'Ativo' : 'Inativo'; ?></td>
                <td><a href="<?php echo $bloquear. $admin->admin_id; ?>"><?php echo ($admin->admin_ativo == '1') ? "<i class='fa fa-ban'></i>" : "<i class='fa fa-unlock'></i>"; ?></a></td>
                <td><a href="<?php echo "/editar/". $admin->admin_id; ?>"><i class="fa fa-pencil"></i></a></td>
                <td><a href="<?php echo "/administradores/excluir/". $admin->admin_id; ?>"><i class="fa fa-trash-o"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</section>
</div>