<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/DTO/Distribucion_DTO.php');
include_once ('../src/util/conection.php');

/**
 * Description of Distribucion_DAO
 *
 * @author Sejib2
 */
class Distribucion_DAO {

    //put your code here

    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }

    /**
     * Metodo para registrar instalacion distribucion
     * @param Distribucion $distribucion
     * @return type
     */
    public function registrarDistribucion(Distribucion_DTO $distribucion) {
        $this->bd->conection();
        $consulta = "INSERT INTO `distribucion`(`cotizacion_id`, `tipo`, `longitud`, `kva`, `cantidad`, `ubicacion`) "
                . "VALUES (".$distribucion->getCotizacion_id().",'" . $distribucion->getTipo() . "'," . $distribucion->getDistancia() . ",'" .  $distribucion->getCantidad() . "'," . $distribucion->getUbicacion(). ");";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        $this->bd->desconnetar();
        return ($result);
    }

}
