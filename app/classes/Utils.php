<?php
namespace app\classes;

class Utils{
    
    public static function formataTelefone($numero){
        $novoNumero = "";
        if(strlen($numero) == 10){
            $novoNumero = "(".substr($numero, 0, 2).") ".substr($numero, 2,4)."-".substr($numero, 6);
        }else{
            $novoNumero = "(".substr($numero, 0, 2).") ".substr($numero, 2,1)." ".substr($numero, 3,4)."-".substr($numero, 7);
        }
        
        return $novoNumero;
    }
}