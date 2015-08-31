<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/DTO/Proyecto_DTO.php');
include_once ('../src/util/conection.php');

/**
 * Description of Proyecto_DAO
 *
 * @author Sejib2
 */
class Proyecto_DAO {

    //put your code here

    private $bd;

    public function __construct() {
        $this->bd = new conection();
        $this->bd->conection();
    }

    /**
     * Metodo para registrar un proyecto de una Cotizacion
     * @param Proyecto $proyecto
     * @return type
     */
    public function registrarProyecto(Proyecto_DTO $proyecto) {
        $consulta = "INSERT INTO `proyecto`(`nombre`, `direccion`, `departamento_id`, `municipio_id`, `propietario`, `disenador`, `cliente_id`) "
                . "VALUES ('" . $proyecto->getNombre() . "','" . $proyecto->getDireccion() . "'," . $proyecto->getDepartamento() . "," . $proyecto->getMunicipio() . ",'" . $proyecto->getPropietario() . "','" . $proyecto->getDisenador() . "'," . $proyecto->getCliente_id() . ");";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        $this->bd->desconnetar();
        return ($result);
    }//FIn registrarProyecto

    public function consultarIdProyecto(){
        $consulta="SELECT id FROM proyecto ORDER BY id DESC LIMIT 1";
        $result=  $this->bd->ejecutarConsultaSQL($consulta);
        $obj=$this->bd->getObject($result);
        $this->bd->desconnetar();
        return ($obj->id);
    }

    
}

?>