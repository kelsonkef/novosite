<?php
function consultAll($table, $mod = PDO::FETCH_OBJ){
    
   $conn = DB::getInstance()->getDb();
    
   $sql = "SELECT * FROM ".$table;        
    
   $stmt = $conn->prepare($sql);    
    
   $stmt->execute();
    
   return $stmt->fetchAll($mod);     
    
}

function select($table, array $columns, array $condition = [], array $ands = [], array $order = [], $mod = PDO::FETCH_OBJ){
    
    $conn = DB::getInstance()->getDb();
    
    $columns = implode(",",$columns);
    
    $where_fields = implode(", ", array_keys($condition));
    $where_values = ":".implode(", :", array_keys($condition));    
    $where = "";
    $_and = "";
    $_order = "";
    if(!empty($where_fields)){
        
        foreach ($condition as $keys=>$value){

            $where.= "$keys = :$keys, ";  

        }

        $where = rtrim($where, ", ");
        $where = "WHERE ".$where;
    }
    
    if(!empty($ands)){
        
        foreach ($ands as $and){
            
            $_and .= $and;
            
        }        
    }
    
    if(!empty($order)){
       
        $_order = " ORDER BY ".$order[0];
        
    }
    
    $sql = "SELECT {$columns} FROM {$table} {$where} {$_and} {$_order}";
    
    $stmt = $conn->prepare($sql);
    
    foreach ($condition as $keys=>$valor){        
        $type = (is_int($valor)) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue(":".$keys, $valor, $type);      
    }  
  
    if($stmt->execute()){
        
        return $stmt->fetchAll($mod);
        
    }
}


function insert($table, array $dates){
    
    $conn = DB::getInstance()->getDb();
    
    $fields = implode(", ", array_keys($dates));
    $valores = ":".implode(", :", array_keys($dates));
    
    $sql = "INSERT INTO {$table} ({$fields}) VALUES ({$valores})";
    
    $stmt = $conn->prepare($sql);
    
    foreach ($dates as $keys=>$valor){
        
        $type = (is_int($valor)) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue(":".$keys, $valor, $type);      
    }      
   
    if($stmt->execute()){
		
		return $conn->lastInsertId();
		
	}
	
	return FALSE;
    
}

function update($table, array $dates, $condition){
    
    $conn = DB::getInstance()->getDb();
    
    $paramiter = NULL;
    
    foreach ($dates as $keys=>$value){
        
        $paramiter.= "$keys = :$keys, ";  
        
    }
    
    $paramiter = rtrim($paramiter, ", ");
    
    $sql = "UPDATE {$table} SET {$paramiter} WHERE {$condition}";
    
    $stmt = $conn->prepare($sql);
    
    foreach ($dates as $keys=>$valor){
        
        $type = (is_int($valor)) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue(":".$keys, $valor, $type);
    }    
          
    return $stmt->execute(); 
    
}

function delete($table, $condition = NULL){
    
    $conn = DB::getInstance()->getDb();
    
    if($condition != NULL){
        
        $condition = " WHERE ".$condition;
        
    }
    
    $sql = "DELETE FROM {$table} {$condition}";
    
    $stmt = $conn->prepare($sql);
    
    return $stmt->execute();
}

function inverteData($data){
        if(count(explode("/",$data)) > 1){
                return implode("-",array_reverse(explode("/",$data)));
        }elseif(
                count(explode("-",$data)) > 1){
                        return implode("/",array_reverse(explode("-",$data)));    
                }
}


function auditor(array $dates){   
    
    $paramiter = NULL;
    
    foreach ($dates as $keys=>$value){
        
        $paramiter.= "$keys = :$keys, ";  
        
    }
    
    $paramiter = rtrim($paramiter, ", ");
    
    $result = "{$paramiter}";
          
    return $result; 
    
}