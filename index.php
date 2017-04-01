<?php
ob_start();
require 'config.php';
require ROOT."app/routes/home.php";
$app->run();
