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
    <section class="resumo">
    <h3>Resumo</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="resumo-box">
                4 usuários visitaram o site.
            </div>
        </div>
        <div class="col-md-4">
            <div class="resumo-box">
                4 clientes cadastrados
            </div>
        </div>
        <div class="col-md-4">
            <div class="resumo-box">
                4 administradores cadastrados
            </div>
        </div>
    </div>
</section>
</div>