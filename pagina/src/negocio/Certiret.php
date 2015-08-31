<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/DAO/Cliente_DAO.php');
include_once ('../src/DAO/Proyecto_DAO.php');
include_once ('../src/DAO/Departamento_DAO.php');
include_once ('../src/DAO/Municipio_DAO.php');
include_once ('../src/DAO/Cotizacion_DAO.php');
include_once ('../src/DAO/Residencial_DAO.php');
include_once ('../src/DAO/Transformacion_DAO.php');
include_once ('../src/DAO/UsoFinal_DAO.php');

/**
 * Description of Certiret
 *
 * @author Sejib2
 */
class Certiret {
    //put your code here

    /**
     * Metodo para registrar un Cliente que realiza una Cotizacion
     * @param Cliente $cliente
     * @return type BOOLEAN
     */
    public function registrarCliente(Cliente_DTO $cliente) {
        $dao = new Cliente_DAO();
        return ($dao->registrarCliente($cliente));
    }

//Fien Registrar Cliente

    public function consultarIdCliente($cedula) {
        $dao = new Cliente_DAO();
        return ($dao->consultarIdCliente($cedula));
    }

    /**
     * Metodo para registrar un Proyecto de un Cliente en una Cotizacion
     * @param Proyecto $proyecto
     * @return type BOOLEAN
     */
    public function registrarProyecto(Proyecto_DTO $proyecto) {
        $dao = new Proyecto_DAO();
        return ($dao->registrarProyecto($proyecto));
    }

//Fin registrar Proyecto

    public function consultarIdProyecto() {
        $dao = new Proyecto_DAO();
        return ($dao->consultarIdProyecto());
    }

    //<editor-fold desc="USO FINAL">
    public function registrarUsoFinal(UsoFinal_DTO $usofinal) {
        $uso = new UsoFinal_DAO();
        return ($uso->registrarUsoFinal($usofinal));
    }

    public function obtenerIdUsoFinal() {
        $uso = new UsoFinal_DAO();
        return ($uso->obtenerIdUsoFinal());
    }

    public function registrarInstResidencial(Residencial_DTO $residencial) {
        $dao = new Residencial_DAO();
        return ($dao->registrarResidencial($residencial));
    }

    public function registrarInstIndustrial(Industrial_DTO $industrial) {
        $dao = new Industrial_DAO();
        return ($dao->registrarIndustrial($industrial));
    }

    //</editor-fold>

    public function registrarInstDistribucion(Distribucion_DTO $distribucion) {
        $dao = new Distribucion_DAO();
        return ($dao->registrarDistribucion($distribucion));
    }

    public function registrarInstTransformcaion(Transformacion_DTO $transformacion) {
        $dao = new Transformacion_DAO();
        return ($dao->registrarTransformacion($transformacion));
    }

    public function registrarInstEspeciales(Especial_DTO $especiales) {
        $dao = new Especial_DAO();
        return ($dao->registrarEspecial($especiales));
    }

    //<editor-fold desc="COTIZACION">
    public function registrarCotizacion(Cotizacion_DTO $cotizacion) {
        $dao = new Cotizacion_DAO();
        return ($dao->registrarCotizacion($cotizacion));
    }
    
    public function obtenerIdCotizacion(){
        $dao=new Cotizacion_DAO();
        return ($dao->obtenerIdCotizacion());
    }
    //</editor-fold>

    /**
     * Metodo para obtener la lista de departamentos de Colombia
     * @return string dropdown html 
     */
    public function getDepartamentos() {
        $dao = new Departamento_DAO();
        $resultset = $dao->getDepartamentos();


        $opc = "                                                <option value='0'>Seleccione</option>\n";

        if ($row = $dao->getArray($resultset)) {
            do {
                $opc .= "                                                <option value ='" . $row['id'] . "'>" . utf8_encode($row["nombre"]) . "</option>\n";
            } while ($row = $dao->getArray($resultset));

            return $opc;
        } else {
            return "Error Dictamen ";
        }
    }

//Fin getDepartamentos

    /**
     * Metodo para obtener los municipios de un dpto dado su id
     * @param type $id del departamento seleccionado
     * @return string dropdown con los municipios pertenecientes al departamento
     */
    public function getMunicipios($departamento, $idmun) {
        $dao = new Municipio_DAO();
        $resultset = $dao->getMunicipios($departamento);
        $select = "<select name=\"" . $idmun . "\" id=\"" . $idmun . "\" class=\"form-control\" onChange=\"validarOption(this.id)\" required>";

        $opc = "<option value=\"0\">Elige</option>\n";

        if ($row = $dao->getArray($resultset)) {
            do {
                $opc .= "<option value =" . $row['id'] . ">" . utf8_encode($row["nombre"]) . "</option>\n";
            } while ($row = $dao->getArray($resultset));
            $select .=$opc . "</select>";
            return $select;
        } else {
            return "Error";
        }
    }

//Fin getMunicipios
}

?>