<?php
/*
 * DB Class
 * This class is used for database related (connect, insert, update, and delete) operations
 * with PHP Data Objects (PDO)
 array("foo"=>1,"bar"=>2,"baz"=>3,4,5)
 */
class Data_Base{
    private $Conection;

	public function __construct(PDO $Conexion) {
        $this->Conection = $Conexion;
    }

    public function Abrir_Transaccion(){
        $this->Conection->beginTransaction();
    }

    public function Confirmar(){
        $this->Conection->commit();
    }

    public function Deshacer(){
        $this->Conection->rollBack();
    }
    
    /// CONSULTAS

    /*
     * Returns rows from the database based on the conditions
     * @param string name of the table
     * @param array select, where, order_by, limit and return_type conditions
     */
    public function Consultar_Automatico($table,$conditions = array()){
        $Sentencia = 'SELECT ';
        $Sentencia .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $Sentencia .= ' FROM '.$table;
        
		if(array_key_exists("where",$conditions)){
            $Sentencia .= ' WHERE ';
            $i = 0;
			
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $Sentencia .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        if(array_key_exists("order_by",$conditions)){
            $Sentencia .= ' ORDER BY '.$conditions['order_by']; 
        }
        
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $Sentencia .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 

        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $Sentencia .= ' LIMIT '.$conditions['limit']; 
        }
        
        return $this->Consultar_Manual($Sentencia); 
    }
    
    public function Consultar_Manual($Sentencia){
        $consulta = $this->Conection->query($Sentencia);	
    	return !empty($consulta)?$consulta:false;
	  }
	

    // FUNCIONES CON LA DB

    /*
     * Insert data into the database
     * @param string name of the table
     * @param array the data for inserting into the table
     */
    public function Insertar($table,$data){

        if(!empty($data) && is_array($data)){
            $columnString = implode(',', array_keys($data));
            $valueString = ":".implode(',:', array_keys($data));
    
            $Sentencia = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";
			$consulta = $this->Conection->prepare($Sentencia);
            
            foreach($data as $key=>$val){
                 $consulta->bindValue(":".$key, $val);
            }
            
            $inserto = $consulta->execute();

            return $inserto? $this->Conection->lastInsertId() : false;
            echo "<h1>fase 5".$inserto."</h1><br>";
        }else{
            return false;
        }
    }
    
    /*
     * Update data into the database
     * @param string name of the table
     * @param array the data for updating into the table
     * @param array where condition on updating data
     */
    public function Actualizar($table,$data,$conditions){
        if(!empty($data) && is_array($data)){
            $colvalSet = '';
            $whereSql = '';
            $i = 0;
            
			foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $colvalSet .= $pre.$key."='".$val."'";
                $i++;
            }
            if(!empty($conditions)&& is_array($conditions)){
                if(array_key_exists("where",$conditions)){
                    $whereSql .= ' WHERE ';
                    $i = 0;
                    foreach($conditions['where'] as $key => $value){
                        $pre = ($i > 0)?' AND ':'';
                        $whereSql .= $pre.$key." = '".$value."'";
                        $i++;
                    }
                }
            }

            $Sentencia = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
            $consulta = $this->Conection->prepare($Sentencia);
            $actualizo = $consulta->execute();
			
            return $actualizo?$consulta->rowCount():false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete data from the database
     * @param string name of the table
     * @param array where condition on deleting data
     */
    public function Borrar($table,$conditions){
        $whereSql = '';

        if(!empty($conditions)&& is_array($conditions)){
                if(array_key_exists("where",$conditions)){
                    $whereSql .= ' WHERE ';
                    $i = 0;
                    foreach($conditions['where'] as $key => $value){
                        $pre = ($i > 0)?' AND ':'';
                        $whereSql .= $pre.$key." = '".$value."'";
                        $i++;
                    }
                }
            }

        $Sentencia = "DELETE FROM ".$table.$whereSql;
        $consulta = $this->Conection->prepare($Sentencia);
        $borro = $consulta->execute();
        return $borro?$borro:false;
    }
}

?>