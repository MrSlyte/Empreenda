<?php
ob_start();
require 'config.php';

//PUBLIC ROUTES
require ROOT."app/routes/home.php";
require ROOT."app/routes/form.php";
require ROOT."app/routes/notFound.php";

//PRIVATE ROUTES
require ROOT."app/routes/adminHome.php";
require ROOT."app/routes/logar.php";
$app->run();
