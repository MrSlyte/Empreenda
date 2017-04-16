<?php

namespace app\classes;

class Admin extends \app\models\Admin {

// <editor-fold defaultstate="collapsed" desc="Properties">
    private $admin_id = array();
    private $admin_name = array();
    private $admin_password = array();
    private $admin_username = array();
    private $admin_ativo = array();
    private $admin_excl = array();

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
        return ($this->admin_ativo == '1' ? "Ativo" : "Inativo");
    }

    function getAdmin_excl() {
        return $this->admin_excl;
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Setters">
    function setAdmin_id($admin_id) {
        array_push($this->admin_id, $admin_id);
    }

    function setAdmin_name($admin_name) {
        array_push($this->admin_name, $admin_name);
    }

    function setAdmin_password($admin_password) {
        array_push($this->admin_password, $admin_password);
    }

    function setAdmin_username($admin_username) {
        array_push($this->admin_username, $admin_username);
    }

    function setAdmin_ativo($admin_ativo) {
        array_push($this->admin_ativo, $admin_ativo);
    }

    function setAdmin_excl($admin_excl) {
        array_push($this->admin_excl, $admin_excl);
    }

    // </editor-fold>

// </editor-fold>

// <editor-fold defaultstate="collapsed" desc="Methods">

    // <editor-fold defaultstate="collapsed" desc="CadastrarAdmin">
    public function CadastrarAdmin() {
        try {
            $atributos = [
                'cliente_nome' => $this->nomeCompleto,
                'cliente_telefone' => $this->telefone,
                'cliente_celular' => $this->celular,
                'cliente_email' => $this->email,
                'cliente_trabalhando' => $this->trabalhando
            ];
            parent::cadastrar($atributos);
            return true;
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
    
    // <editor-fold defaultstate="collapsed" desc="EditarAdmin">
    public static function EditarAdmin() {
        try {
            return parent::listar();
        } catch (\ActiveRecord\ActiveRecordException $e) {
            throw new Exception("Não foi possível obter as informações do banco de dados. " . $e->getMessage());
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
//</editor-fold>
}
