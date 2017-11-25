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
 	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 	<script type="text/javascript" src="js/controldediseño.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<title>Datos personales2</title>
 </head>
 <body>
	 <center>

	 	<div>
	 		<ul class="nav nav-tabs nav-justified">
			  <li role="presentation" class="active"><a href="DatosPersonales.php">Datos Personales</a></li>
			  <li role="presentation"><a href="#">Consulta</a></li>
			  <li role="presentation"><a href="#">Examen Fisico</a></li>
			</ul>
			<ul class="nav nav-pills nav-justified">
				<li role="presentation"><a href="DatosPersonales.php">DatosPersonales</a></li>
				<li role="presentation" class="active"><a href="DatosPersonales2.php">DatosPersonales2</a></li>
				<li role="presentation"><a href="DatosPersonales3.php">DatosPersonales3</a></li>
			</ul>
	 	</div>
	 	<form name="datosper" method="post" action="">
	 		<div class="input-group"> 			
	 	
	 	 		<div>
		 			<label for="sexo">Sexo</label>
					<select name="sexo" class="form-control">
						<option value="Masculino">Masculino</option>}
						<option value="Femenino">Femenino</option>}
					</select>	
		 		</div>

		 		<div>
		 			<label for="etnia">Etnia</label>
		 			<select name="etnia" class="form-control" onchange="aparecertb(this)">
		 				<option value="Mestizos">Mestizos</option>
		 				<option value="Miskitu">Miskitu</option>
		 				<option value="Matagalpa">Matagalpa</option>
		 				<option value="Creole">Creole</option>
		 				<option value="Subtiava">Subtiava</option>
		 				<option value="Nahua">Nahua</option>
		 				<option value="Chorotega">Chorotega</option>
		 				<option value="Mayangna">Mayangna</option>
		 				<option value="Nicarao">Nicarao</option>
		 				<option value="Garifuna">Garifuna</option>
		 				<option value="Rama">Rama</option>
		 				<option value="Otros" >Otros</option>
		 			</select>
		 		</div>

		 		<div name="otrosd" style="display: none;">
		 			<input type="text" placeholder="Etnia" class="form-control">
		 		</div>

				<div>
					<label for="nacimiento">Fecha de Nacimiento</label>
					<input type="date" name="nacimiento" class="form-control">
				</div>

				<div>
		 			<label for="religion">Religion</label>
		 			<input type="text" name="religion" placeholder="ej: agnostico" class="form-control">
		 		</div>

				<div>
		 			<label for="escol">Escolaridad</label>
					<select name="escol" class="form-control">
						<option value="Ninguno">Ninguno</option>
						<option value="Primaria">Primaria</option>}
						<option value="Secundaria">Secundaria</option>}
						<option value="Superior">Superior</option>
					</select>	
		 		</div>
				
				<div>
		 			<label for="profesion">Profesion</label>
		 			<input type="text" name="profesion" placeholder="ej: Obreoro" class="form-control">
		 		</div>

				<nav aria-label="...">
  					<ul class="pager">
    					<li class="previous"><a href="DatosPersonales.php"><span aria-hidden="true">&larr;</span> Anterior</a></li>
    					<li class="next"><a href="DatosPersonales3.php">Siguiente <span aria-hidden="true">&rarr;</span></a></li>
  					</ul>
				</nav>
			</div>
	 	</form>
	</center>
 </body>
 </html>