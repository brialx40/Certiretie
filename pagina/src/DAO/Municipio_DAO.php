<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/util/conection.php');

/**
 * Description of Municipio_DAO
 *
 * @author brialxsfW7
 */
class Municipio_DAO {

    //put your code here

    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }

    /**
     * Metodo para consultar los municipios por un Departamento dado su id
     * @param type $id codigo del Dpto
     * @return type
     */
    public function getMunicipios($id){
        $this->bd->conection();
        $consulta = "SELECT id,nombre FROM municipio WHERE departamento_id=".$id;
        return $this->bd->ejecutarConsultaSQL($consulta);
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