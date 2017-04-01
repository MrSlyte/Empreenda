<?php

namespace app\classes;

class Login extends \app\models\AppModel {

    use \app\traits\LoginTrait;

    private $campos;
    private $username;
    private $senha;
    
    function getUsername() {
        return $this->username;
    }

    function getSenha() {
        return $this->senha;
    }

    function setUsername($username) {
        $this->username = filter_var($username, INPUT_POST, FILTER_SANITIZE_STRING);
    }

    function setSenha($password) {
        $this->senha = filter_var($password, INPUT_POST, FILTER_SANITIZE_STRING);
    }

        
    public function __construct() {
        $this->campos = ["admin_username", "admin_password"];
        $this->setCampos($this->campos);
    }

    public function Login() {
        $retorno = $this->logar($this->getUsername(), $this->getSenha());
        return print_r($retorno);
    }

}
