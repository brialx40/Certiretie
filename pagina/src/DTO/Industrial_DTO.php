<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Industrial
 *
 * @author Sejib2
 */
class Industrial_DTO{
    //put your code here
    private $complejidad;
    private $ubicacion;
    private $kva;
    private $area;
    private $usoFinal_id;
   
    public function __construct($complejidad, $ubicacion, $kva, $area, $usoFinal_id) {
        $this->complejidad = $complejidad;
        $this->ubicacion = $ubicacion;
        $this->kva = $kva;
        $this->area = $area;
        $this->usoFinal_id = $usoFinal_id;
    }

    public function getComplejidad() {
        return $this->complejidad;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getKva() {
        return $this->kva;
    }

    public function getArea() {
        return $this->area;
    }

    public function getUsoFinal_id() {
        return $this->usoFinal_id;
    }

    public function setComplejidad($complejidad) {
        $this->complejidad = $complejidad;
    }

    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    public function setKva($kva) {
        $this->kva = $kva;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setUsoFinal_id($usoFinal_id) {
        $this->usoFinal_id = $usoFinal_id;
    }



}
