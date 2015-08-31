<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Sejib2
 */
class Cliente_DTO {

    //put your code here

    private $cedula;
    private $nombre;
    private $direccion;
    private $departamento;
    private $municipio;
    private $fijo;
    private $celular;
    private $email;
    private $cargo;
    private $rsocial;
    
    //Extra
    private $id;

    //Constructor
    public function __construct($cedula, $nombre, $direccion, $departamento, $municipio, $fijo, $celular, $email, $cargo, $rsocial) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->departamento = $departamento;
        $this->municipio = $municipio;
        $this->fijo = $fijo;
        $this->celular = $celular;
        $this->email = $email;
        $this->cargo = $cargo;
        $this->rsocial = $rsocial;
    }

    // Getter and Setter

    public function getCedula() {
        return $this->cedula;
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

    public function getFijo() {
        return $this->fijo;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
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

    public function setFijo($fijo) {
        $this->fijo = $fijo;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
    
    public function getRsocial() {
        return $this->rsocial;
    }

    public function setRsocial($rsocial) {
        $this->rsocial = $rsocial;
    }

        public function toString() {
        return ("Nombre: " . $this->nombre . " Cedula: " . $this->cedula . " dir: " . $this->direccion . " dpto: " . $this->departamento . " mun: " . $this->municipio . " tel: " . $this->fijo . ""
                . " Cel: " . $this->celular . " email: " . $this->email);
    }

}
