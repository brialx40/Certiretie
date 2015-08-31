<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ('../src/Facade/Facade.php');
include_once ('../src/DTO/Cliente_DTO.php');

//informacion cliente
$cedula = $_POST["num_documento"];
$nombre = $_POST["nombre"];
$cargo = $_POST["profesion"];
$rsocial = $_POST["rsocial"];
$dir1 = $_POST["direccion"];
$dpto1 = $_POST["departamento"];
$mun1 = $_POST["municipio"];
$fijo = $_POST["telefono_fijo"];
$celular = $_POST["celular"];
$email = $_POST["email"];

//Creo objeto de la clase Cliente y guardo la información capturada
$cliente = new Cliente_DTO($cedula, $nombre, $dir1, $dpto1, $mun1, $fijo, $celular, $email, $cargo, $rsocial);
//echo $cliente->toString();
$fac = new Facade();
if ($fac->registrarCliente($cliente)) {
    $idCliente = $fac->consultarIdCliente($cedula);
    echo ('<script>
                                            document.getElementById("cedula").value="' . $idCliente . '";
                                            document.getElementById("Continuar").disabled=false;
                                            document.getElementById("rgC").disabled=true;
                                            document.getElementById("form1").reset();                                            
                                        </script>
                                        <div class="alert alert-success alert-dismissable">                    
                    <h4><i class="icon fa fa-check"></i> BIEN!</h4>
                    Presione continuar
                  </div>');
} else {
    $idCliente = $fac->consultarIdCliente($cedula);
    echo ('<script>
                                            document.getElementById("cedula").value="' . $idCliente . '";
                                            document.getElementById("Continuar").disabled=false;
                                            document.getElementById("rgC").disabled=true;
                                            document.getElementById("form1").reset();                                            
                                        </script>
                                        <div class="alert alert-success alert-dismissable">                   
                    <h4><i class="icon fa fa-check"></i> BIEN!</h4>
                    Presione continuar
                  </div>');
}
?>