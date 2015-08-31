<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexionBD
 * Esta Clase permite realizar la conexion a Cualquier base de Datos solo se deben 
 * modificar los valores de las variables para realizar la respectiva conexión *
 * @author brialxsf->SEJIB
 */
class conection {

    private $servidor = "localhost";
    private $usuario = "root";
    private $constrasena = "";
    private $bd = "certiretbd";
    private $conexion;

    /**
     * Metodo para realizar la conexión a la BD
     */
    public function conection() {
        $this->conexion =new mysqli($this->servidor, $this->usuario, $this->constrasena, $this->bd);
        /* comprobar la conexión */
        if ($this->conexion->connect_errno) {
            printf("Falló la conexión: %s\n", $this->conexion->connect_error);
            exit();
        }
    }

    /**
     * Metodo para ejecutar la Consulta SQL
     * @param type $consulta consulta a realizar
     * @return type Devuelve el contenido de la consulta en caso de estar bien, 
     * de lo contrario mostrara el error correspondiente
     */
    public function ejecutarConsultaSQL($consulta) {
        $result = mysqli_query($this->conexion,$consulta);
        if ($result === FALSE) {
            die(mysqli_error($this->conexion));
            return FALSE;
        }
        return $result;      
   }

    /**
     * Metodo para consultar datos y devolver en Arrat
     * @param type $result datos de consulta
     * @return type array
     */
    public function getArray($result) {
        return mysqli_fetch_array($result);
    }
    
    /**
    * Metodo para obener resultado de consulta por objeto
    * @param type $result
    * @return type
    */
    public function getObject($result) {
        return mysqli_fetch_object($result);
    }
    
    /**
     * Metodo para obtener la cantidad de filas en una tabla
     * @param type $result
     * @return type
     */
    public function getCantidadFilas($result){
        return mysqli_num_rows($result);
    }

    /**
     * metodo para desconectar la conexxion a la bd
     */
    public function desconnetar() {
        mysqli_close($this->conexion);
    }

}

?>