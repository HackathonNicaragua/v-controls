<?php 

		function callWebService()
		{
		  //Direccion del servidor donde se tienn los servicios
		  return json_decode(file_get_contents('http://192.168.10.8/Hackathon2017/Hackathon2017/public/login?Nombre_Usuario='.$_POST['usuario'].'&Contraseña='.$_POST['password']),true);
		}	
$pacientes='<div class="container"> <div class="list-group" id="lista"> ';
$resul = callWebService();
foreach($resul as $usuario)
{
	
 if ($usuario['Id_Usuario'] ) {
 	
 	    $_SESSION['loggedin']=true;
		$_SESSION['username'] = $usuario['Nombre_Usuario'];
		$_SESSION['id']=$usuario['Id_Usuario'];
		$_SESSION['niveles']=$usuario['Niveles'];
		$_SESSION['start']=time();
		$_SESSION['expire']=$_SESSION['start']+(5*160);  	
	header('Location: ListaExpedientes.php'); 
	
	}
	else
	{
		echo "Usuario o contraseña incorrectos";
		echo "<a href='index.php'>Volver a intentar</a>";
	}
}


 ?>