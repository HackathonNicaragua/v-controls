<?php
session_start();?>
<?php  
if (isset($_SESSION['loggedin'])) {

}
else
{
echo "Esta pagina es solo para usuarios registrados.<br>";
echo "<br><a href='index.php'>Login</a>";
exit;
}
$now = time();
$aviso="Su sesion ah expirado";
if($now > $_SESSION['expire']) {
session_destroy();
 echo "<script> alert ('".$aviso."') </script>"; 
 header('Location: index.php');

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medical technology</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css?ver?1.0">
<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="ListaExpedientes.php">Expedientes Clinicos</a>
    <form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="buscar">
  </div>
  <button type="submit" class="btn btn-default">buscar</button>
</form>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buscar por <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nombre</a></li>
            <li><a href="#">Numero de expediente</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <?php 
         
        if (strcmp(strtolower($_SESSION['niveles']),strtolower("registro"))==0) {
          # code...?>
        <li><a href="DatosPersonales.php">Nuevo Ingreso <span class="glyphicon glyphicon-plus"></span></a></li>
        </li>
        <?php 
        }
        ?>
       <?php 
         
        if (strcmp(strtolower($_SESSION['niveles']),strtolower("administrador"))==0) {
          # code...?>
        <li><a href="Nuevousuario.php">Agregar Usuario<span class="glyphicon glyphicon-plus"></span></a></li>
        </li>
        <?php 
        }
        ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php  
$isregistro=false;
function callWebService()
{
  //Direccion del servidor donde se tienn los servicios
  if (strcmp(strtolower($_SESSION['niveles']),strtolower("administrador"))==0){
  $isregistro=true;
   return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/mostrardatospersonales'),true);
} 
  if (strcmp(strtolower($_SESSION['niveles']),strtolower("registro"))==0){
  $isregistro=true;
   return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/mostrarlistapacientes?Id_Usuario='.$_SESSION['id']),true);
}
if (strcmp(strtolower($_SESSION['niveles']),strtolower("doctor"))==0){
  return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/listarpacientesfinal?Id_Usuario='.$_SESSION['id']),true);
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
</div>
</body>
</html>