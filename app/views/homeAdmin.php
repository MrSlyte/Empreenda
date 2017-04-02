<?php
if(is_null($_SESSION['UserDataId']) || empty($_SESSION['UserDataId']) || $_SESSION['UserDataId'] == 0){
    header("Location: /");
}
?>
Bem vindo, <?= $_SESSION['UserDataNome']; ?>