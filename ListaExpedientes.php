<?php
// Función para llamar al webservice y devolver el resultado en un array

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medical technology</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
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
      <a class="navbar-brand" href="#">Expedientes Clinicos</a>
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
        <li><a href="#">Nuevo Ingreso <span class="glyphicon glyphicon-plus"></span></a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php  
function callWebService()
{
  //Direccion del servidor donde se tienn los servicios
  return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/mostrardatospersonales'),true);
}
$pacientes='<div class="container"> <div class="list-group" id="lista"> ';
$cities='';
$resul = callWebService();
foreach($resul as $Expediente)
{
    $pacientes.='<a href="DatosPersonales.php?n_exp='.$Expediente['Numero_Expediente']. '" class="list-group-item " >';
    $pacientes.='<h4 id="paciente1" class="list-group-item-heading">'.$Expediente['Nombres'].' '.$Expediente['Apellidos'].'</h4>';
    $pacientes.='<p class="list-group-item-text">'.$Expediente['Numero_Expediente'].'</p>';
    $pacientes.='</a>';
}
$pacientes.='<div/><div/>';
print_r ($pacientes);
?>
</div>
</body>
</html>