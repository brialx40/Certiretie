<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/util/conection.php');
include_once ('../src/DTO/Especial_DTO.php');

/**
 * Description of ESpecial_DAO
 *
 * @author Sejib2
 */
class Especial_DAO {

    //put your code here
    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }

    /**
     * Metodo para registrar instalacion especial
     * @param Especial $especial
     * @return type
     */
    public function registrarEspecial(Especial_DTO $especial) {
        $this->bd->conection();
        $consulta = "INSERT INTO `especiales`( `ubicacion`, `kva`, `area`)"
                . " VALUES ('".$especial->getUbicacion()."',".$especial->getKva().",".$especial->getArea().");";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        $this->bd->desconnetar();
        return ($result);
    }

}
