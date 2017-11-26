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
			  <li role="presentation" class="active"><a href="DatosPersonalesV.php">Datos Personales</a></li>
			  <li role="presentation"><a href="#">Consulta</a></li>
			  <li role="presentation"><a href="#">Examen Fisico</a></li>
			</ul>
			<ul class="nav nav-pills nav-justified">
				<li role="presentation" class="active"><a href="DatosPersonalesV.php">DatosPersonales</a></li>
				<li role="presentation"><a href="DatosPersonales2V.php">DatosPersonales2</a></li>
				<li role="presentation"><a href="DatosPersonales3V.php">DatosPersonales3</a></li>
			</ul>
	 	</div>
					
		<?php 
			$n_expe='';
			function callWebService()
			{
			  //Direccion del servidor donde se tienn los servicios
				//$n_expe= $_GET['n_exp'];
			  return json_decode(file_get_contents('http://192.168.10.8/Hackathon2017/Hackathon2017/public/buscarpornumero?Numero_Expediente='.$_GET['n_exp']),true);
			}	
			$resul = callWebService();
			echo '<form name="datosper" method="post" action="">';
	 		echo'<div class="input-group">'; 			
	 		
	 		foreach($resul as $expediente)
			{
			 	echo'<div>';
		 		echo'<label for="n_expe">Numero de Expediente</label>';
		 		echo'<input type="text" pattern="[0-9]*" name="n_expe" value="'.$expediente['Numero_Expediente'].'" class="form-control" disabled>';	
		 		echo'</div>';

		 		echo'<div>';
		 		echo'<label for="nombres">Nombres</label>';
		 		echo'<input type="text" name="nombres" value="'.$expediente['Nombres'].'" class="form-control" disabled> ';
		 		echo'</div>';

		 		echo'<div>';
		 		echo'<label for="apellidos">Apellidos</label>';
		 		echo'<input type="text" name="apellidos" value="'.$expediente['Apellidos'].'" class="form-control" disabled>';
		 		echo'</div>';	

		 		echo'<div>';
		 		echo'<label for="edad">Edad</label>';
		 		echo'<input type="number" name="edad" value="'.$expediente['Edad'].'" class="form-control">';
		 		echo'</div>';

		 		echo'<div>';
		 		echo'<label for="cedula">Numero de Cedula</label>';
		 		echo'<input type="text" name="nombres" value="'.$expediente['numerocedula'].'" class="form-control" disabled>';
		 		echo'</div>';    

		 		echo'<div>';
		 		echo'<label for="inss">Numero de INSS</label>';
		 		echo'<input type="text" name="inss" value="'.$expediente['numeroinss'].'" class="form-control" disabled>';
		 		echo'</div>';

			}
		 		
		 		
		 ?>


		 		
	
				<nav aria-label="...">
  					<ul class="pager">
    					<li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Anterior</a></li>
    					<li class="next"><a href="DatosPersonales2.php">Siguiente <span aria-hidden="true">&rarr;</span></a></li>
  					</ul>
				</nav>
			</div>
	 	</form>
	</center>

	
 </body>
 </html>