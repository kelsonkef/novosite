<?php

namespace app\controllers;
use app\core\Controller;
use app\daos\Convenios;

class ConveniosController extends Controller{
    
    public function index(){
        $convenios = new Convenios();
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $dados["contador"] = $this->ipAtual($ip);
        $dados["convenios"] = $convenios->find("convenios", ["WHERE ativo_convenio = 's' ORDER BY id_convenio DESC LIMIT 8"]);
        $dados["titulo"] = "Nossos Últimos Convênios";
        $dados["view"] = "convenios/index";
        $this->load("template", $dados);
    }
    
    public function ipAtual($ip){
        $ipAtual = new Convenios();
        
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
    
    public function getConvenios($n){
        $convenios = new Convenios();
        $categorias = array(1 => "lazer", 2 => "educação", 3=> "Saúde", 4=> "gastronomia", 5=> "serviços", 6 => "comércio");
        $ip = $_SERVER['REMOTE_ADDR'];
        $dados["contador"] = $this->ipAtual($ip);
        $dados["convenios"] = $convenios->find("convenios", ["WHERE categoria = '$categorias[$n]' ORDER BY data_inscricao AND ativo_convenio = 's'"]);
        $dados["titulo"] = "Nossos Convênios de ". ucfirst($categorias[$n]); 
        $dados["view"] = "convenios/index";
        $this->load("template", $dados);
    }
    
    
}
