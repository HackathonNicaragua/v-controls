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
 	<title>Datos personales</title>
 </head>
 <body>
	 <center>
	 	<form name="datosper" method="post" action="">
	 		<div class="input-group"> 			
	 		
		 		<div>
		 			<label for="n_expe">Numero de Expediente</label>
		 			<input type="text" pattern="[0-9]*" name="n_expe" placeholder="ej: 001" class="form-control">	
		 		</div>

		 		<div>
		 			<label for="nombres">Nombres</label>
		 			<input type="text" name="nombres" placeholder="ej: Erick Alejandro" class="form-control">
		 		</div>

		 		<div>
		 			<label for="apellidos">Apellidos</label>
		 			<input type="text" name="apellidos" placeholder="ej: Ruiz Mejia" class="form-control">
		 		</div>

		 		<div>
		 			<label for="edad">Edad</label>
		 			<input type="number" name="edad" placeholder="ej: 24" class="form-control">
		 		</div>

		 		<div>
		 			<label for="cedula">Numero de Cedula</label>
		 			<input type="text" name="nombres" placeholder="ej: 281-141186-0001P" class="form-control">
		 		</div>

		 		<div>
		 			<label for="inss">Numero de INSS</label>
		 			<input type="text" name="inss" placeholder="ej: 1501002" class="form-control">
		 		</div>

		 		<div>
		 			<label for="sexo">Sexo</label>
					<select name="sexo" class="form-control">
						<option value="Masculino">Masculino</option>}
						<option value="Femenino">Femenino</option>}
					</select>	
		 		</div>

		 		<div>
		 			<label for="etnia">Etnia</label>
		 			<select name="etnia" class="form-control" onChange="aparecertb()">
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

		 		<div name="otrosd">
		 			<input type="text" placeholder="Etnia" class="form-control">
		 		</div>

				<div>
					<label for="nacimiento">Fecha de Nacimiento</label>
					<input type="date" name="nacimiento" class="form-control">
				</div>
			</div>
	 	</form>
	</center>
 </body>
 </html>