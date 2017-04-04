<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Olá! Este é meu portfólio pessoal. Entre e conheça um pouco do meu trabalho, garanto que vale muito a pena.">
        <meta property="og:url" content="https://mrslyte.github.io/Portfolio/index.html" />
        <meta property="og:type" content="profile" />
        <meta property="og:title" content="Leonardo Rocha - Portfólio pessoal" />
        <meta property="og:description" content="Olá! Este é meu portfólio pessoal. Entre e conheça um pouco do meu trabalho, garanto que vale muito a pena." />
        <meta property="og:image" content="https://mrslyte.github.io/Portfolio/assets/img/img-face.jpg" />
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        <title>Leonardo Rocha - Home</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/styleLayout.css" rel="stylesheet">
        <link href="assets/css/styleHome.css" rel="stylesheet">
        <link href="assets/css/styleForm.css" rel="stylesheet">
        <link href="assets/css/styleError404.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo"><img src="assets/img/logo.svg" alt="Logo site header" title="Logo Empreenda"></div>
                <div class="clear"></div>
                <div class="principal">
                    <h1><strong>SEJA EMPREENDEDOR</strong></h1>
                    <p>O negócio do século 21</p>
                    <ul>
                        <li><a href="/">CONHEÇA A INICIATIVA</a></li>
                        <li><a href="/about">CADASTRE-SE</a></li>
                    </ul>
                </div>
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