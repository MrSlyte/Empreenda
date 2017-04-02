<?php

namespace app\classes;

class Login extends \app\models\Admin {
    private $username;
    private $password;
    
    function getUsername() {
        return $this->username;
    }

    function getSenha() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setSenha($password) {
        $this->password = $password;
    }
    
    public function Login() {
        return parent::find('first', array('conditions' => array("admin_username = ? and admin_password = ?", $this->username, $this->password)));
    }

}