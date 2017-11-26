<?php 
	//require('conexion.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/estiloformu.css">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 	<script type="text/javascript" src="js/controldediseño.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<title>Datos personales3</title>
 </head>
 <body>
	 <center>

	 	<div>
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

		 	<form name="datosper" method="post" action="">
		 		<div class="input-group"> 			
		 		
			 		<div>
			 			<label for="direccion">Direccion</label>
			 			<input type="text" name="direccion" placeholder="Avenida Rios calle 3" class="form-control">	
			 		</div>

			 		<div>
			 			<label for="npadre">Nombre del Padre</label>
			 			<input type="text" pattern="[A-Za-z]" name="npadre" placeholder="Jose Avendaño" class="form-control">
			 		</div>

			 		<div>
			 			<label for="nmadre">Nombre de la madre</label>
			 			<input type="text" pattern="[A-Za-z]" name="apellidos" placeholder="Isabel Medina" class="form-control">
			 		</div>


					<nav aria-label="...">
	  					<ul class="pager">
	    					<li class="previous"><a href="DatosPersonales2.php"><span aria-hidden="true">&larr;</span> Anterior</a></li>
	    					<li class="next"><a onclick="">Guardar <span aria-hidden="true">&rarr;</span></a></li>
	  					</ul>
					</nav>
				</div>
		 	</form>
	</center>
 </body>
 </html>