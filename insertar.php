<?php 
	$data['Numero_Expediente']=$_COOKIE['n_exo'];
	$data['Nombres']=$_COOKIE['nom'];
	$data['Apellidos']=$_COOKIE['apell'];
	$data['Edad']=$_COOKIE['ed'];
	$data['numerocedula']=$_COOKIE['ced'];
	$data['numeroinss']=$_COOKIE['inss'];
	$data['Sexo']=$_COOKIE['sexo'];
	$data['Etnias']=$_COOKIE['etni'];
	$data['Lugar_Nacimiento']=$_COOKIE['nac'];
	$data['Religion']=$_COOKIE['relig'];
	$data['Escolaridad']=$_COOKIE['escol'];
	$data['Profesion']=$_COOKIE['prof'];
	$data['Direccion_Habitual']=$_POST['direccion'];
	$data['Nombre_Madre']=$_POST['nmadre'];
	$data['Nombre_Padre']=$_POST['npadre'];
	$resultado=callservice($data);
	if($resultado){
		header('Location: ListaExpedientes.php');
	}
	//'?Id_Usuario='.$_POST['id'].'&Nombre_Usuario='.$_POST['usuario'].'&Contraseña='.$_POST['contra'].'&Niveles='.$_POST['niveles']
	function callservice($params){
		$url='http://172.20.8.146/Hackathon2017/Hackathon2017/public/createdatospersonales';
		$curl = curl_init();
		echo($params['Numero_Expediente']);
	    curl_setopt($curl, CURLOPT_POST, 1);
				curl_setopt($curl, CURLOPT_POSTFIELDS,$params);
	 curl_setopt($curl, CURLOPT_URL, $url);
	 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query($params));
	 $result = curl_exec($curl);

	 curl_close($curl);
	 return $result;
	}
	

	echo($data['Numero_Expediente']);
	
	echo($_COOKIE['nom']);
	echo($_COOKIE['apell']);
	echo( $_COOKIE['ed']);
	echo($_COOKIE['ced']);
	echo($_COOKIE['inss']);
	echo($_COOKIE['sexo']);
	echo($_COOKIE['etni']);
	echo($_COOKIE['nac']);
	echo($_COOKIE['relig']);
	echo($_COOKIE['escol']);
	echo($_COOKIE['prof']);

 ?>