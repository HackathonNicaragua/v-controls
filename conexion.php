<?php	
	// esta es otra forma de conectarse a la base da datos
	$mysqli=new mysqli("127.0.0.1","root","","expendientes_clinicas",3307); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	else{
		echo 'La conexion se realizo satisfactoriamente';
		echo "</br>";
	}
?>