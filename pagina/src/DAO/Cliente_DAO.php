<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/DTO/Cliente_DTO.php');
include_once ('../src/util/conection.php');

/**
 * Description of Cliente_DAO
 *
 * @author Sejib2
 */
class Cliente_DAO {

    //put your code here

    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }

//Fin Constructor

    /**
     * Metodo para registrar Cliente de cotización
     * @param Cliente $cliente object de la cliente que contiene la informacion
     * @return type
     */
    public function registrarCliente(Cliente_DTO $cliente) {
        $this->bd->conection();
        $ced = $cliente->getCedula();

        if ($this->validarCliente($ced)) {
            $consulta = "INSERT INTO `cliente`(`nombre`, `num_documento`, `direccion`, `departamento_id`, `municipio_id`, `telefono_fijjo`, `celular`, `email`, profesion, rsocial) "
                    . "VALUES ('" . $cliente->getNombre() . "'," . $cliente->getCedula() . ",'" . $cliente->getDireccion() . "'," . $cliente->getDepartamento() . "," . $cliente->getMunicipio() . ",'" . $cliente->getFijo() . "','"
                    . $cliente->getCelular() . "','" . $cliente->getEmail() . "','" . $cliente->getCargo() . "','" . $cliente->getRsocial() . "');";
            $result = $this->bd->ejecutarConsultaSQL($consulta);
            $this->bd->desconnetar();
            return ($result);
        }
    }

//Fin registrarCliente

    public function consultarIdCliente($cedula) {
        $this->bd->conection();
        $consulta = "SELECT id FROM cliente WHERE num_documento=" . $cedula . " LIMIT 1;";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        $obj=$this->bd->getObject($result);
        $this->bd->desconnetar();
        return ($obj->id);
    }

    /**
     * Metodo para validar si hay clientes registrados con la cedula
     * @param type $cedula numero de documento del cliente
     * @return boolean
     */
    private function validarCliente($cedula) {

        $consulta = "SELECT id FROM cliente WHERE num_documento=" . $cedula . " LIMIT 1";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        if (($this->bd->getCantidadFilas($result) == 0)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//Fin validarCliente
}

//End Class
