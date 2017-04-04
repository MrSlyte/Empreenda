<section class="contact">
    <h3>Preencha os campos abaixo</h3>
    <form class="form" method="post" name="formContact" action="/cadastrar">
        <?php echo (isset($sucesso)) ? $sucesso : ''; ?>
        <p></p>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Nome completo:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome completo" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="number" name="telefone" class="form-control" placeholder="Digite seu telefone"/>
                    <p>Digite apenas números</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">

                    <label>Celular:</label>
                    <input type="number" name="celular" class="form-control" placeholder="Digite seu celular"/>
                    <p>Digite apenas números</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">

                    <label>E-mail:</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Atualmente, você está trabalhando?</label><br>
                    <label class="radio-inline"><input type="radio" name="radioSim" value="1">Sim</label>
                    <label class="radio-inline"><input type="radio" name="radioNao" value="0">Não</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-sm-offset-6 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group btnForm">
                    <input type="submit" name="formSubmit" class="btn btn-primary" value="Cadastrar">
                </div>
            </div>
        </div>
    </form>
</section>