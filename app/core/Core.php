<?php

class Core{
    private $controller;
    private $metodo;
    private $parametros = array();
    
    public function __construct() {
        $this->verificaUri();
        
    }
    
    public function run(){
        //recebe uma classeController
        $controllerCorrente = $this->getController();
        //cria um objeto da claseController recebida
        $c = new $controllerCorrente();
        //passa os parâmetros para o método encontrado da classe
        call_user_func_array(array($c, $this->getMetodo()), $this->getParametros());
    }
    
    public function verificaUri(){
        //separa a url onde tem index.php, retornando um array e retirando o index.php
        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        //pega o ultimo elemento do array
        $url = end($url);
        //verifica se o array não está vazio ou com valores null
        if($url != ""){
            //Separa a string pelo / e retorna um array
            $url = explode("/", $url);
            //Retira o primeiro elemento do array
            array_shift($url);
            //transforma o 1° caracter da string em Maiúscula e atribui na variavel controller
            $this->controller = ucfirst($url[0])."Controller";
            //retirar o primeiro elemento do array
            array_shift($url);
            //verifica se existe um elemento no array
            if(isset($url[0])){
                //atribui o primeiro elemento na variavel método
                $this->metodo = $url[0];
                //retirar o primeiro elemento
                array_shift($url);
            }
            if(isset($url[0])){
                //atribui os ultimos elementos da url na variavel paramentros
                $this->parametros = array_filter($url);
            }
        }else{
            //Se não encontrar um URI valida controlle recebe home
            $this->controller = ucfirst(CONTROLLER_PADRAO)."Controller";
        }
        
    }
    
    function getController() {
        //verifica se existe uma classe com o nome atribuido
        if(class_exists(NAMESPACE_CONTROLLER.$this->controller)){
            //retorna a classe controller encontrada
            return NAMESPACE_CONTROLLER.$this->controller;
        }
        //retorna a classe controller padrão HomeController
        return NAMESPACE_CONTROLLER.ucfirst(CONTROLLER_PADRAO)."Controller";
    }
    
    function getMetodo() {
        //verifica se existe o método da classe
        if(method_exists(NAMESPACE_CONTROLLER.$this->controller, $this->metodo)){
            return $this->metodo;
        }
        
        return METODO_PADRAO;
    }
    
    function getParametros() {
        return $this->parametros;
    }
    
    public function verSessao(){
        header("location: ".URL_BASE."login");
    }
}