<?php 
session_start(); 
$isregistro=false;
function callWebService()
{
  //Direccion del servidor donde se tienn los servicios
  if (strcmp(strtolower($_SESSION['niveles']),strtolower("administrador"))==0){
   return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/buscarpornombre'.$_POST['busqueda']),true);
} 
  if (strcmp(strtolower($_SESSION['niveles']),strtolower("registro"))==0){
  $isregistro=true;
    return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/buscarpornombre'.$_POST['busqueda']),true);
}
if (strcmp(strtolower($_SESSION['niveles']),strtolower("doctor"))==0){
  return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/buscaridusuario?Nombres='.$_POST['busqueda'].'&Id_Usuario='.$_SESSION['id']),true);
}

}


$pacientes='<div class="container"> <div class="list-group" id="lista"> ';
$resul = callWebService();
foreach($resul as $Expediente)
{  if ($isregistro) {
  //Rec
   $pacientes.='<a href="Asignardoctor.php?n_exp='.$Expediente['Numero_Expediente']. '" class="list-group-item " >';
    $pacientes.='<h4 id="paciente1" class="list-group-item-heading">'.$Expediente['Nombres'].' '.$Expediente['Apellidos'].'</h4>';
    $pacientes.='<p class="list-group-item-text">'.$Expediente['Numero_Expediente'].'</p>';
    $pacientes.='</a>';
      } 
else{
    $pacientes.='<a href="DatosPersonalesV.php?n_exp='.$Expediente['Numero_Expediente']. '" class="list-group-item " >';
    $pacientes.='<h4 id="paciente1" class="list-group-item-heading">'.$Expediente['Nombres'].' '.$Expediente['Apellidos'].'</h4>';
    $pacientes.='<p class="list-group-item-text">'.$Expediente['Numero_Expediente'].'</p>';
    $pacientes.='</a>';
     }
}
$pacientes.='<div/><div/>';
print_r ($pacientes);
?>