<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/util/conection.php');
/**
 * Description of Departamento_DAO
 *
 * @author brialxsfW7
 */
class Departamento_DAO {
    //put your code here
    
    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }
    
    /**
     * Metodo para consultar todos los departamentos de la DB
     * @return type Array
     */
    public function getDepartamentos(){
        $this->bd->conection();
        $consulta = "SELECT id,nombre FROM departamento";
        $result = $this->bd->ejecutarConsultaSQL($consulta); 
        return ($result);
    }
    
    /**
     * Metodo para obtener el resultado de la consulta en un array
     * @param type $result
     * @return type
     */
    public function getArray($result){
        return ($this->bd->getArray($result));
    }
}


?>