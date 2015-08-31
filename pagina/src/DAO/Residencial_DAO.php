<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/util/conection.php');
include_once ('../src/DTO/Residencial_DTO.php');

/**
 * Description of Residencial_DAO
 *
 * @author brialxsfW7
 */
class Residencial_DAO {

    //put your code here

    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }

    /**
     * Metodo para registrar tipo de instalacion Uso Final-Residencial
     * @param Residencial_DTO $residencial
     * @return type
     */
    public function registrarResidencial(Residencial_DTO $residencial) {
        $this->bd->conection();
        $consulta = "INSERT INTO `residencial_comercial`(`calibre`, `area`, `cantidad`, `ubicacion`, `uso_fin_id`) "
                . "VALUES ('" . $residencial->getCalibre() . "'," . $residencial->getArea() . "," . $residencial->getCantidad() . ",".$residencial->getUbicacion().",".$residencial->getUso_final_id().");";        
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        $this->bd->desconnetar();
        return ($result);
    }

}

?>