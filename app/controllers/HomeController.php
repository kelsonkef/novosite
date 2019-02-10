<?php

namespace app\controllers;
use app\core\Controller;
use app\daos\Home;

class HomeController extends Controller{  

    public function index(){       
        $home = new Home();
        
        $ip = $_SERVER['REMOTE_ADDR'];
        
        $dados["contador"] = $this->ipAtual($ip);        
        
        $dados["carroucels"] = $home->find("carroucel", ["ORDER BY data DESC"]);
        $dados["noticias"] = $home->find("noticias", ["WHERE ativo_noticia = 's' ORDER BY data DESC LIMIT 3"]);
        $dados["ultnoticias"] = $home->find("noticias", ["WHERE ativo_noticia = 's' ORDER BY data DESC LIMIT 8"]);
        $dados["view"] = "home";        
        $this->load("template", $dados);
    }
    
    public function ipAtual($ip){
        $ipAtual = new Home();
        
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
    
    public function getServicos($view){
        $ip = $_SERVER["REMOTE_ADDR"];
        $dados["contador"] = $this->ipAtual($ip);
        $dados["view"] = "servicos/".$view."/Index";
        $this->load("template", $dados);
    }
    
}