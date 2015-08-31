<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/util/conection.php');
include_once ("../src/DTO/Instalacion_DTO.php");
/**
 * Description of Cotizacion_DAO
 *
 * @author brialxsfW7
 */
class Cotizacion_DAO {

    //put your code here
    private $bd;

    public function __construct() {
        $this->bd = new conection();        
    }

    /**
     * Metodo  para registrar una Cotizacion RETIE-RETILAP
     * @param type $cotizacion object con la info de la Cotizacion
     * @return type BOOLEAN
     */
    public function registrarCotizacion(Cotizacion_DTO $cotizacion) {
        $this->bd->conection();
        //El estado de una cotizacion es 1 pendiente, 0 revisado        
        //Creo el comando SQL para registrar
        $consulta = "INSERT INTO cotizacion (proyecto_id,tipo_cotizacion,instalacion_id,estado)"
                . " VALUES (" . $cotizacion->getProyecto_id() . "," . $cotizacion->getTipo_cotizacion() . "," . $cotizacion->getTipo_instalacicon_id() . "," . $cotizacion->getEstado() . ",'".$cotizacion->getFecha()."')";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        $this->bd->desconnetar();
        return ($result);
    }

    public function obtenerIdCotizacion(){
        $this->bd->conection();
        $consulta="SELECT id FROM cotizacion ORDER BY id DESC LIMIT 1";
        $result=  $this->bd->ejecutarConsultaSQL($consulta);
        $obj=  $this->bd->getObject($result);
        $this->bd->desconnetar();
        return ($obj->id);
    }

    

}
