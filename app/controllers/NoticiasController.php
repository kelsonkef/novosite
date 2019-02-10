<?php

namespace app\controllers;
use app\core\Controller;
use app\daos\Noticias;

class NoticiasController extends Controller{
    private $quantidade = 8;
    
    public function index(){
        $noticia = new Noticias();
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $dados["contador"] = $this->ipAtual($ip);
        $dados["noticias"] = $noticia->find("noticias", ["WHERE ativo_noticia = 's' ORDER BY data DESC LIMIT $this->quantidade"]);
        $dados["quantidade"] = $this->quantidade;
        $dados["view"] = "noticias/index";
        $this->load("template", $dados);
    }
    
    public function ipAtual($ip){
        $ipAtual = new Noticias();
        
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
    
    public function getNoticia($id){
        $noticia = new Noticias();
        $ip = $_SERVER["REMOTE_ADDR"];
        $dados["contador"] = $this->ipAtual($ip);
        $dados["noticia"] = $noticia->find("noticias", ["WHERE id_noticia = '$id'"])[0];
        $dados["view"] = "noticias/noticia";
        $this->load("template", $dados);
    }
    
    public function maisNoticias($quantidade){
        $this->quantidade = $quantidade+10;
        $this->index();    
    }
    
}
