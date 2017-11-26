<?php 
	$n_expe='';

		function callWebService()
		{
		  //Direccion del servidor donde se tienn los servicios
		  return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/buscarpornumero'),true);
		}	

		$n_expe= $_GET['n_exp'];
		if ($n_expe != null) {
			echo $n_expe;
		}
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
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="/js/controldediseño.js" ></script>
 	<title>Datos personales2</title>
 </head>
 <body>
	 <center>

	 	<div id="navs">
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
		 			<select id="etnia" class="form-control" onchange ="aparecertb(this)">
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
		 				<option value="Otros">Otros</option>
		 			</select>
		 		</div>

		 		<div id="otrosd" style="display:none;">
		 			<input type="text" placeholder="Etnia" class="form-control">
		 		</div>

				<div>
					<label for="nacimiento">Fecha de Nacimiento</label>
					<input type="date" name="nacimiento" class="form-control">
				</div>

				<div>
		 			<label for="religion">Religion</label>
		 			<input type="text" name="religion" placeholder="Catolico" class="form-control">
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
		 			<input type="text" name="profesion" placeholder="Obreoro" class="form-control">
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