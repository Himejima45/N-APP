<?php 
function conexion(){

include 'superconect.php';

$conexion=mysqli_connect($servidor, $usuario,  $password, $bd);
  return $conexion;
}

?>