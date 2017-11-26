 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="css/bootstrap.min.css?ver?1.0">
 	<link rel="stylesheet" href="css/estiloformu.css">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<title>Datos personales</title>
 </head>
 <body>
	 <center>

	 	<div id="navs">
	 		<ul class="nav nav-tabs nav-justified">
			  <li role="presentation" class="active"><a href="DatosPersonales.php">Datos Personales</a></li>

			</ul>
			<ul class="nav nav-pills nav-justified">
				<li role="presentation" class="active"><a href="DatosPersonales.php">DatosPersonales</a></li>
				<li role="presentation"><a href="DatosPersonales2.php">DatosPersonales2</a></li>
				<li role="presentation"><a href="DatosPersonales3.php">DatosPersonales3</a></li>
			</ul>
	 	</div>
				
		
	 	<form name="datosper" method="post" action="DatosPersonales2.php">
	 		<div class="input-group"> 			
	 		
		 		<div>
		 			<label for="n_expe">Numero de Expediente</label>
		 			<input type="text" pattern="[0-9]*" name="n_expe" class="form-control">	
		 		</div>

		 		<div>
		 			<label for="nombres">Nombres</label>
		 			<input type="text" name="nombres" class="form-control">
		 		</div>

		 		<div>
		 			<label for="apellidos">Apellidos</label>
		 			<input type="text" name="apellidos" class="form-control">
		 		</div>

		 		<div>
		 			<label for="edad">Edad</label>
		 			<input type="number" name="edad" class="form-control">
		 		</div>

		 		<div>
		 			<label for="cedula">Numero de Cedula</label>
		 			<input type="text" name="cedula" class="form-control">
		 		</div>

		 		<div>
		 			<label for="inss">Numero de INSS</label>
		 			<input type="text" name="inss" class="form-control">
		 		</div>

				<nav aria-label="..." class="botones">
  					<ul class="pager">
    					<li ><a href="#" disabled><button type="button" class="btn btn-default">Anterior</button></a></li>
    					<li ><a><input type="submit" class="btn btn-default" value="Siguiente"></a></li>
  					</ul>
				</nav>
			</div>
	 	</form>
	</center>

	
 </body>
 </html>