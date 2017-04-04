<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        <title>Empreenda - Painel administrativo</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/styleLayout.css" rel="stylesheet">
        <link href="assets/css/styleAdmin.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo"><img src="assets/img/logo.svg" alt="Logo site header" title="Logo Empreenda"></div>
            </div>
        </header>
        <main>
            <div class="container">
                <?php require $pagina . '.php'; ?>
            </div>
        </main>
        <footer>
            <img src="assets/img/logo.svg" alt="Logo site footer" title="Logo Empreenda"><br>
            <span>2017 - Todos os direitos reservados.</span>
        </footer>
        <!--LIBRARYS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--JQUERY-->
        <script src="assets/js/Jquery/function.js"></script>
    </body>
</html>