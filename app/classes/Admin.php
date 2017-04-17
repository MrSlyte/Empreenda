<?php

namespace app\classes;

class Admin extends \app\models\Admin {

// <editor-fold defaultstate="collapsed" desc="Properties">
    private $admin_id = 0;
    private $admin_name = "";
    private $admin_password = "";
    private $admin_username = "";
    private $admin_ativo = 0;
    private $admin_excl = 0;

//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Getters and Setters">
    // <editor-fold defaultstate="collapsed" desc="Getters">
    function getAdmin_id() {
        return $this->admin_id;
    }

    function getAdmin_name() {
        return $this->admin_name;
    }

    function getAdmin_ativo() {
        return $this->admin_ativo;
    }

    function getAdmin_excl() {
        return $this->admin_excl;
    }
    function getAdmin_password() {
        return $this->admin_password;
    }

    function getAdmin_username() {
        return $this->admin_username;
    }

        // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Setters">
    
    function setAdmin_id($admin_id) {
        $this->admin_id = $admin_id;
    }
   
    function setAdmin_name($admin_name) {
        $this->admin_name = $admin_name;
    }

    function setAdmin_password($admin_password) {
        $this->admin_password = $admin_password;
    }

    function setAdmin_username($admin_username) {
        $this->admin_username = $admin_username;
    }

    function setAdmin_ativo($admin_ativo) {
        $this->admin_ativo = $admin_ativo;
    }

    function setAdmin_excl($admin_excl) {
        $this->admin_excl = $admin_excl;
    }

        // </editor-fold>

// </editor-fold>

// <editor-fold defaultstate="collapsed" desc="Methods">

    // <editor-fold defaultstate="collapsed" desc="CadastrarAdmin">
    public function CadastrarAdmin() {
        try {
            $atributos = [
                'admin_name' => $this->getAdmin_name(),
                'admin_username' => $this->getAdmin_username(),
                'admin_password' => $this->getAdmin_password(),
                'admin_ativo' => $this->getAdmin_ativo(),
                'admin_excl' => $this->getAdmin_excl()
            ];
            
            return print_r(parent::cadastrar($atributos));
        } catch (\ActiveRecord\ActiveRecordException $e) {
            return $e->getMessage();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    //</editor-fold>

    // <editor-fold defaultstate="collapsed" desc="RetornaAdmin">
    public static function RetornaAdmin() {
        try {
            return parent::where('admin_excl', '0', 'all');
        } catch (\ActiveRecord\ActiveRecordException $e) {
            throw new Exception("Não foi possível obter as informações do banco de dados. " . $e->getMessage());
        }
    }
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="RetornaUmAdmin">
    public static function RetornaUmAdmin($id) {
        try {
            return parent::where('admin_id', $id, 'first');
        } catch (\ActiveRecord\ActiveRecordException $e) {
            throw new Exception("Não foi possível obter as informações do banco de dados. " . $e->getMessage());
        }
    }
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="BloquearAdmin">
    public static function BloquearAdmin($id) {
        try {
            return parent::atualizar($id, ["admin_ativo" => 0]);
        } catch (\ActiveRecord\ActiveRecordException $e) {
            throw new Exception("Não foi possível atualizar as informações do banco de dados \n com o método BloquearAdmin em \app\classes\Admin. " . $e->getMessage());
        }
    }
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="DesbloquearAdmin">
    public static function DesbloquearAdmin($id) {
        try {
            return parent::atualizar($id, ["admin_ativo" => 1]);
        } catch (\ActiveRecord\ActiveRecordException $e) {
            throw new Exception("Não foi possível atualizar as informações do banco de dados \n com o método DesbloquearAdmin em \app\classes\Admin. " . $e->getMessage());
        }
    }
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="ExcluirAdmin">
    public static function ExcluirAdmin($id) {
        try {
            return parent::atualizar($id, ["admin_excl" => 1, "admin_ativo" => 0]);
        } catch (\ActiveRecord\ActiveRecordException $e) {
            throw new Exception("Não foi possível excluir um registro do banco de dados \n com o método ExcluirAdmin em \app\classes\Admin. " . $e->getMessage());
        }
    }
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="EditarAdmin">
    public static function EditarAdmin($id, $name, $username, $password) {
        try {
            $attributes = [
                "admin_name" => $name,
                "admin_username" => $username,
                "admin_password" => $password
                ];
            return parent::atualizar($id, $attributes);
        } catch (\ActiveRecord\ActiveRecordException $e) {
            throw new Exception("Não foi possível excluir um registro do banco de dados \n com o método ExcluirAdmin em \app\classes\Admin. " . $e->getMessage());
        }
    }
    //</editor-fold>
//</editor-fold>
}
