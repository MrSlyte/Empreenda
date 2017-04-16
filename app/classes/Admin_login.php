<?php

namespace app\classes;

class AdminMetaDados extends \app\models\Admin_login {

// <editor-fold defaultstate="collapsed" desc="Properties">
    private $adminLogin_id = 0;
    private $adminLogin_dataLogin = "";
    private $adminLogin_ipLogin = "";
    private $adminLogin_idAdmin = 0;

//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Getters and Setters">
    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function getAdminLogin_id() {
        return $this->adminLogin_id;
    }

    public function getAdminLogin_dataLogin() {
        return $this->adminLogin_dataLogin;
    }

    public function getAdminLogin_ipLogin() {
        return $this->adminLogin_ipLogin;
    }

    public function getAdminLogin_idAdmin() {
        return $this->adminLogin_idAdmin;
    }

        // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Setters">
    public function setAdminLogin_dataLogin($adminLogin_dataLogin) {
        $this->adminLogin_dataLogin = $adminLogin_dataLogin;
    }

    public function setAdminLogin_ipLogin($adminLogin_ipLogin) {
        $this->adminLogin_ipLogin = $adminLogin_ipLogin;
    }

    public function setAdminLogin_idAdmin($adminLogin_idAdmin) {
        $this->adminLogin_idAdmin = $adminLogin_idAdmin;
    }

    
    // </editor-fold>

// </editor-fold>

// <editor-fold defaultstate="collapsed" desc="Methods">

    // <editor-fold defaultstate="collapsed" desc="RegistraMetaDados">
    public function RegistraMetaDados() {
        try {
            $atributos = [
                'admin_login_data_login' => $this->getAdminLogin_dataLogin(),
                'admin_login_ip' => $this->getAdminLogin_ipLogin(),
                'admin_login_admin_id' => $this->getAdminLogin_idAdmin()
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

//</editor-fold>
}
