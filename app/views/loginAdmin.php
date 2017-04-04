<?php
if(isset($logado)):
    header("Location: /admin");
endif;
?>
<section class="contact">
    <h3>Área administrativa</h3>
    <form class="form" method="post" action="/admin">
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Usuário:</label>
                    <input type="text" name="username" class="form-control" placeholder="Digite seu usuário"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" name="password" class="form-control" placeholder="Digite sua senha"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group btnForm">
                    <input type="submit" name="formSubmit" class="btn btn-primary" value="Entrar">
                </div>
            </div>
        </div>
    </form>
</section>