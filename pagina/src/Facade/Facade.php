<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/negocio/Certiret.php');
include_once ('../src/DAO/Cliente_DAO.php');
include_once ('../src/DAO/Proyecto_DAO.php');
include_once ('../src/DAO/Departamento_DAO.php');
include_once ('../src/DAO/Municipio_DAO.php');
include_once ('../src/DAO/Cotizacion_DAO.php');
include_once ('../src/DAO/Residencial_DAO.php');

/**
 * Description of Facade
 *
 * @author asierra
 */
class Facade {

    private $neg;

    function __construct() {
        $this->neg = new Certiret();
    }

    //<editor-fold desc="METODOS CRUD CLIENTE">
    function registrarCliente(Cliente_DTO $cliente) {
        return ($this->neg->registrarCliente($cliente));
    }

    function consultarIdCliente($cedula) {
        return ($this->neg->consultarIdCliente($cedula));
    }

    //</editor-fold>
    
    //<editor-fold desc="METODOS CRUD PROYECTO">
    function registrarProyecto(Proyecto_DTO $proyecto) {
        return ($this->neg->registrarProyecto($proyecto));
    }

    function consultarIdProyecto() {
        return ($this->neg->consultarIdProyecto());
    }
    //</editor-fold>
    
    //<editor-fold desc="USO FINAL">
    public function registrarUsoFinal(UsoFinal_DTO $usofinal) {        
        return ($this->neg->registrarUsoFinal($usofinal));
    }

    public function obtenerIdUsoFinal() {       
        return ($this->neg->obtenerIdUsoFinal());
    }

    public function registrarInstResidencial(Residencial_DTO $residencial) {        
        return ($this->neg->registrarInstResidencial($residencial));
    }

    public function registrarInstIndustrial(Industrial_DTO $industrial) {        
        return ($this->neg->registrarInsIndustrial($industrial));
    }

    //</editor-fold>
    
    //<editor-fold desc="INSTALACIONES">
    public function registrarInstDistribucion(Distribucion_DTO $distribucion) {        
        return ($this->neg->registrarInstDistribucion($distribucion));
    }

    public function registrarInstTransformcaion(Transformacion_DTO $transformacion) {
        
        return ($this->neg->registrarInstTransformacion($transformacion));
    }

    public function registrarInstEspeciales(Especial_DTO $especiales) {
        return ($this->neg->registrarEspeciales($especial));
    }

    public function registrarCotizacion(Cotizacion_DTO $cotizacion) {
        return ($this->neg->registrarCotizacion($cotizacion));
    }
    
    public function obtenerIdCotizacion(){
        return ($this->neg->obtenerIdCotizacion());
    }


    //</editor-fold>
    
    //<editor-fold desc="METODOS EXTRAS">

    /**
     * Metodo para obtener la lista de Departamentos de Colombia
     * @return type String dropdown html con la informacion solicitada
     */
    function listaDepartamentos() {        
        return ($this->neg->getDepartamentos());
    }

    /**
     * Metodo para obtener lista de municipios
     * @param type $departamento id del departamento
     * @param type $idmun id donde se cargar la informacion en la web
     * @return type String dropdown con los municipios del dpto seleccionado
     */
    function listaMunicipios($departamento, $idmun) {
        return ($this->neg->getMunicipios($departamento, $idmun));
    }

    //</editor-fold>
}

?>