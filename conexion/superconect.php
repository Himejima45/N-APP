<?php  

$servidor="localhost";
$usuario="root";
$password="";
$bd="nutristar";

$conection = @mysqli_connect($servidor,$usuario,$password,$bd);

	if(!$conection){
		echo "Error en la conexión";
	}

?>