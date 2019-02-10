<?php

namespace app\controllers;
use app\core\Controller;
use app\daos\Sedes;

class SedesController extends Controller{  

    public function index(){       
        
        $ip = $_SERVER['REMOTE_ADDR'];
        
        $dados["contador"] = $this->ipAtual($ip);
        
        $dados["titulo"] = "Nossas Sedes";
        $dados["view"] = "Sedes/Index";      
        $this->load("template", $dados);
    }
    
    public function ipAtual($ip){
        $ipAtual = new Sedes();
        
        $atual = $ipAtual->find("contador", ["WHERE ip = '$ip'"])[0];
        
        if($atual == NULL){
            
            $dados_ip = array(
                "ip"    => $ip
            );
            $ipAtual->insert("contador", $dados_ip);
        }
        
        $cont = $ipAtual->find("contador", array());
        
        return count($cont);
    }
    
}