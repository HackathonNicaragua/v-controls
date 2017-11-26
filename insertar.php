<?php 

	function callWebService()
			{
			  //Direccion del servidor donde se tienn los servicios
				//$n_expe= $_GET['n_exp'];
			  return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/createdatospersonales?Numero_Expediente='.$_COOKIE['n_exo'].'Nombres="'.$_COOKIE['nom'].'"Apellidos="'.$_COOKIE['apell'].'"Numero_Cedula="'.$_COOKIE['ced'].'"Numero_INSS='.$_COOKIE['inss'].'Edad='.$_COOKIE['ed'].'Religio="'.$_COOKIE['relig'].'" Etnias="'.$_COOKIE['etni'].'" Escolaridad="'.$_COOKIE['escol'].'" Sexo="'.$_COOKIE['sexo'].'"Profesion="'.$_COOKIE['prof'].'" Direccion_Habitual="'.$_POST['direccion'].'" Nombre_Padre="'.$_POST['npadre'].'" Nombre_Madre="'.$_POST['nmadre'].'"'),true);
			}	
			$resul = callWebService();

	echo($_COOKIE['n_exp']);
	echo($_COOKIE['nom']);
	echo($_COOKIE['apell']);
	echo( $_COOKIE['ed']);
	echo($_COOKIE['ced']);
	echo($_COOKIE['inss']);
	echo($_COOKIE['sexo']);
	echo($_COOKIE['n_exp']);
	echo($_COOKIE['etni']);
	echo($_COOKIE['nac']);
	echo($_COOKIE['relig']);
	echo($_COOKIE['escol']);
	echo($_COOKIE['prof']);

 ?>