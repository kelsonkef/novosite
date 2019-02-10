<?php

require_once "config.php";

class DB{
    
    private static $db = NULL;
    private static $pdo;
    
    final private function __construct(){
        
        try {
            
            self::getDb();
            
        } catch (Exception $e) {
            
            $e->getMessage();
            
        }
        
    }
    
    public static function getInstance(){
        
        if(self::$db == NULL){
            
            self::$db = new self();
            
        }
        
        return self::$db;
        
    }
    
    public function getDb(){
        
        if(self::$pdo == NULL){
            
            self::$pdo = new PDO("mysql:dbname=".DB. ";host=".SERVER, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            
        }
        
        return self::$pdo;
        
    }
    
}