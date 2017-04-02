<?php
namespace app\traits;

trait LoginTrait{
    private $campos;
    private $campo;
    private $sqlCampo;
    
    public function setCampos($campos){
        $this->campos = $campos;
    }
    public function getCampos(){
        return $this->campos;
    }
    
    public function logar($username, $password){
        foreach ($this->getCampos() as $campo):
            $this->campo .= $campo.'=? and ';
        endforeach;
        $this->sqlCampo = rtrim($this->campo, 'and ');
        return parent::find('first', array('conditions' => array($this->sqlCampo, $username, $password)));
    }
    public static function deslogar($sessao){
        if(isset($_SESSION[$sessao])){
            unset($_SESSION[$sessao]);
            session_destroy();
            session_regenerate_id();
        }
    }
    public static function estaLogado($sessao, $app, $redirect=null){
        if(!isset($_SESSION[$sessao])){
            if($redirect == null):
                return false;
            else:
                $app->redirect($redirect);
            endif;
        }else{
            return true;
        }
    }
    
    public static function dadosLogin($sessao){
        return (\app\classes\session::sessaoExiste($sessao)) ? \app\classes\session::recuperarSessao($sessao) : 'visitante';
    }
}