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
    <section class="recebimentos">
    <h3>Contatos recebidos</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr style="background-color: #000;">
                <th>Nome</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>E-mail</th>
                <th>Está trabalhando</th>
            </tr>
        </thead>
        <tbody style="color: #000;">
            <?php foreach ($contatos as $contato): 
            $telefoneFormatado = \app\classes\Utils::formataTelefone($contato->cliente_telefone);
            $celularFormatado = \app\classes\Utils::formataTelefone($contato->cliente_celular);
                    ?>
            <tr>
                <td><?php echo $contato->cliente_nome; ?></td>
                <td><?php echo $telefoneFormatado; ?></td>
                <td><?php echo $celularFormatado; ?></td>
                <td><?php echo $contato->cliente_email; ?></td>
                <td><?php echo ($contato->cliente_trabalhando == '1') ? 'Sim' : 'Não' ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
</div>