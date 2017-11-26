 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="css/bootstrap.min.css?ver?1.0">
 	<link rel="stylesheet" href="css/estiloformu.css?ver?1.0">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 	<script type="text/javascript" src="js/controldediseño.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<title>Datos personales3</title>
 </head>
 <body>
 	<?php 
			setcookie('sexo',$_POST['sexo'],time()+1000);
			setcookie('etni',$_POST['etnia'],time()+2220);
			setcookie('nac',$_POST['nacimiento'],time()+2220);
			setcookie('relig',$_POST['religion'],time()+2220);
			setcookie('escol',$_POST['escol'],time()+2220);
			setcookie('prof',$_POST['profesion'],time()+2220);
		?>
	 <center>
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
	</div>
  </div><!-- /.container-fluid -->
</nav>
	 	<div id="navs">
	 		<ul class="nav nav-tabs nav-justified">
			  <li role="presentation"><a href="DatosPersonales.php">Datos Personales</a></li>
			  <li role="presentation"><a href="#">Consulta</a></li>
			  <li role="presentation" class="active"><a href="#">Examen Fisico</a></li>
			</ul>
			<ul class="nav nav-pills nav-justified">
				<li role="presentation"><a href="DatosPersonales.php">DatosPersonales</a></li>
				<li role="presentation"><a href="DatosPersonales2.php">DatosPersonales2</a></li>
				<li role="presentation" class="active"><a href="DatosPersonales3.php">DatosPersonales3</a></li>
			</ul>
	 	</div>

		 	<form name="datosper" method="post" action="insertar.php">

		 		<div class="input-group"> 			
		 		
			 		<div>
			 			<label for="direccion">Direccion</label>
			 			<input type="text" name="direccion" class="form-control">	
			 		</div>

			 		<div>
			 			<label for="npadre">Nombre del Padre</label>
			 			<input type="text" name="npadre" class="form-control">
			 		</div>

			 		<div>
			 			<label for="nmadre">Nombre de la madre</label>
			 			<input type="text" name="nmadre" class="form-control">
			 		</div>


					<nav aria-label="..." class="botones">
	  					<ul class="pager">
	    					<li ><a href="DatosPersonales2.php"><button type="button" class="btn btn-default">Anterior</button></a></li>
    					<li ><a><input type="submit" class="btn btn-default" value="Siguiente"></a></li>
	  					</ul>
					</nav>
				</div>
		 	</form>
	</center>
 </body>
 <?php 
 $sexo=$_POST['sexo'];
setcookie('sexo',$sexo,time()+60000000);
setcookie('etnia',$_POST['etnia'],time()+60000000);
setcookie('nacimiento',$_POST['nacimiento'],time()+60000000);
setcookie('religion',$_POST['religion'],time()+60000000);

 ?>
 </html>