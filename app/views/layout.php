<!DOCTYPE html>
<html lang="pt-br" ng-app="portfolio">
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/styleHome.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="layout">
            <header>
                <div class="container">
                    <div class="logo"><img src="assets/img/logo.svg" alt="Logo" title="Logo Portfólio"></div>
                    <div class="clear"></div>
                    <div class="principal">
                        <h1><strong>SEJA EMPREENDEDOR</strong></h1>
                        <p>Aqui vai um subtítulo</p>
                        <ul>
                            <li><a href="#">CONHEÇA A INICIATIVA</a></li>
                            <li><a href="#">CADASTRE-SE</a></li>
                        </ul>
                        <a href="javascript:;" class="toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </header>
            <main>
                <div ng-view></div>
            </main>
            <footer>
                <img src="assets/img/logo.svg" alt="Logo footer" title="Logo Portfólio"><br>
                <span>2017 - Todos os direitos reservados.</span>
            </footer>
        </div>
        <!--LIBRARYS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/js/Library/angular.min.js"></script>
        <script src="assets/js/Library/angular-route.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--ANGULAR ESSENTIALS-->
        <script src="assets/js/Angular/Essentials/app.js"></script>
        <script src="assets/js/Angular/Essentials/routeConfig.js"></script>

        <!--ANGULAR CONTROLLERS-->
        <script src="assets/js/Angular/Controllers/AboutController.js"></script>
        <script src="assets/js/Angular/Controllers/MenuController.js"></script>

        <!--ANGULAR SERVICES-->
        <script src="assets/js/Angular/Services/aboutService.js"></script>
        <script src="assets/js/Angular/Services/MenuService.js"></script>

        <!--JQUERY-->
        <script src="assets/js/Jquery/function.js"></script>
    </body>
</html>