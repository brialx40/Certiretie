<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/util/conection.php');
include_once ('../src/DTO/Industrial_DTO.php');
/**
 * Description of Industrial_DAO
 *
 * @author Sejib2
 */
class Industrial_DAO {
    //put your code here
    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }
    
    /**
     * Metodo para registrar uso final industrial
     * @param Industrial $industrial
     * @return type
     */
    public function registrarIndustrial(Industrial_DTO $industrial){
        $this->bd->conection();
        $consulta = "INSERT INTO `industrial`(`ubicacion`, `kva`, `area`, `complejidad`, `uso_final_id`)"
                . " VALUES ('".$industrial->getUbicacion()."',".$industrial->getKva().",".$industrial->getArea().",".$industrial->getComplejidad().",".$industrial->getUsoFinal_id().");";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        $this->bd->desconnetar();
        return ($result);
    }
}
