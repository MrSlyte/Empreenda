<?php

namespace app\classes;

class Cliente extends \app\models\Cliente {

    private $nomeCompleto;
    private $telefone;
    private $celular;
    private $email;
    private $trabalhando;
    
    function setNomeCompleto($nomeCompleto) {
        $this->nomeCompleto = $nomeCompleto;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    public function CadastrarCliente(){
        try{
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
        }catch(\Exception $e){
            return $e->getMessage();
        }
        
    }
    public static function RetornaClientes() {
        return parent::listar();
    }

}