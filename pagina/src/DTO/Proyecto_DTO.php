<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proyecto
 *
 * @author Sejib2
 */
class Proyecto_DTO {
    //put your code here
    private $nombre;
    private $direccion;
    private $departamento;
    private $municipio;
    private $propietario;
    private $disenador;
    private $cedula_cliente;
    private $tipo_proyecto;
    private $estrato;
    //Extra
    private $id;
    private $cliente_id;
    
    public function __construct($nombre, $direccion, $departamento, $municipio, $propietario, $disenador, $tipo_proyecto, $estrato, $cliente_id) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->departamento = $departamento;
        $this->municipio = $municipio;
        $this->propietario = $propietario;
        $this->disenador = $disenador;
        $this->tipo_proyecto = $tipo_proyecto;
        $this->estrato = $estrato;
        $this->cliente_id = $cliente_id;
    }

        public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function getMunicipio() {
        return $this->municipio;
    }

    public function getPropietario() {
        return $this->propietario;
    }

    public function getDisenador() {
        return $this->disenador;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    public function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    public function setDisenador($disenador) {
        $this->disenador = $disenador;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCedula_cliente() {
        return $this->cedula_cliente;
    }

    public function getCliente_id() {
        return $this->cliente_id;
    }

    public function setCedula_cliente($cedula_cliente) {
        $this->cedula_cliente = $cedula_cliente;
    }

    public function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }


    public function toString() {
        return "PRoyecto ". $this->nombre.", ".
        $this->direccion .", ".
        $this->departamento .", ".
        $this->municipio.", ".
        $this->propietario .", ".
        $this->disenador .", ".
        $this->cedula_cliente ." ";
    }

    
}


?>