<?php 
$data['Id_Usuario']=$_POST['id'];
$data['Nombre_Usuario']=$_POST['usuario'];
$data['Contraseña']=$_POST['contra'];
$data['Niveles']=$_POST['niveles'];
$resultado=callservice($data);
if($resultado){
	header('Location: ListaExpedientes.php');
}
//'?Id_Usuario='.$_POST['id'].'&Nombre_Usuario='.$_POST['usuario'].'&Contraseña='.$_POST['contra'].'&Niveles='.$_POST['niveles']
function callservice($params){
	$url='http://172.20.8.146/Hackathon2017/Hackathon2017/public/crearUsuario';
	$curl = curl_init();

    curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS,$params);
 curl_setopt($curl, CURLOPT_URL, $url);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

 $result = curl_exec($curl);

 curl_close($curl);
 return $result;
}


 ?>