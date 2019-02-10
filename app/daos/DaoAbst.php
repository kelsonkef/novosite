<?php
namespace app\daos;

class DaoAbst{    
    
    public function find($tabela, $dados){        
        return select($tabela, ["*"],[],$dados);
    }    
    
    public function remove($tabela, $condition){
        return delete($tabela, $condition);
    }
    
    public function update($tabela, $dados, $condicao){
        return update($tabela, $dados, $condicao);
    }

    public function insert($tabela, $dados){
        return insert($tabela, $dados);
    }
    
    public function auditor($dates){
        return auditor($dates);
    }
   
}

