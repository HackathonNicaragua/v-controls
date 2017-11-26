<?php 

		function callWebService()
		{
		  //Direccion del servidor donde se tienn los servicios
		  return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/mostrarUsuarios'),true);
		}	
$pacientes='<div class="container"> <div class="list-group" id="lista"> ';
$cities='';
$resul = callWebService();
foreach($resul as $usuario)
{
 if (strcmp($usuario['Nombre_Usuario'],$_POST['usuario'])==0 && strcmp($usuario['Contraseña'],$_POST['password'])==0 ) {
 	$_SESSION['loggedin']=true;
		$_SESSION['id'] = $usuario['Id_Usuario'];
		
	header('Location: ListaExpedientes.php'); 
	
	}
	else
	{
		echo "Usuario o contraseña incorrectos";
		echo "<a href='index.php'>Volver a intentar</a>";
	}
}


 ?>