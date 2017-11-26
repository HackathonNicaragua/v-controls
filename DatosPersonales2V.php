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
 	<script type="text/javascript" src="js/controldedisenio.js" ></script>
 	<title>Datos personales2</title>
 </head>
 <body>
	 <center>

	 		 	
	 	<?php 
			$n_expe='';
			function callWebService()
			{
			  //Direccion del servidor donde se tienn los servicios
				//$n_expe= $_GET['n_exp'];
			  return json_decode(file_get_contents('http://172.20.8.146/Hackathon2017/Hackathon2017/public/buscarpornumero?Numero_Expediente='.$_GET['n_exp']),true);
			}	
			$resul = callWebService();

			 			
	 		
	 		foreach($resul as $expediente)
			{

				echo'<div id="navs">';
		 		echo'<ul class="nav nav-tabs nav-justified">';
				  echo'<li role="presentation" class="active"><a href="DatosPersonalesV.php?n_exp='.$expediente['Numero_Expediente'].'">Datos Personales</a></li>';
				  echo'<li role="presentation"><a href="#">Consulta</a></li>';
				  echo'<li role="presentation"><a href="#">Examen Fisico</a></li>';
				echo'</ul>';
				echo'<ul class="nav nav-pills nav-justified">';
					echo'<li role="presentation" ><a href="DatosPersonalesV.php?n_exp='.$expediente['Numero_Expediente'].'">DatosPersonales</a></li>';
					echo'<li role="presentation" class="active"><a href="DatosPersonales2V.php?n_exp='.$expediente['Numero_Expediente'].'">DatosPersonales2</a></li>';
					echo'<li role="presentation"><a href="DatosPersonales3V.php?n_exp='.$expediente['Numero_Expediente'].'">DatosPersonales3</a></li>';
				echo'</ul>';
		 	echo'</div>';

			echo '<form name="datosper" method="post" action="">';
	 		echo'<div class="input-group">';

	 	 		echo'<div>';
		 		echo'<label for="sexo">Sexo</label>';
				echo'<input type="text" name="sexo" value="'.$expediente['Sexo'].'" class="form-control" disabled>';	
		 		echo'</div>';
		 		
		 		echo'<div>';
		 		echo'<label for="etnia">Etnia</label>';
				echo'<input type="text" name="etnia" value="'.$expediente['Etnias'].'" class="form-control" disabled>';	
		 		echo'</div>';

		 		echo'<div>';
					echo'<label for="nacimiento">Lugar de Nacimiento</label>';
					echo'<input type="text" name="nacimiento" value="'.$expediente['Lugar_Nacimiento'].'" class="form-control" disabled>';
				echo'</div>';

				echo'<div>';
		 			echo'<label for="religion">Religion</label>';
		 			echo'<input type="text" name="religion" value="'.$expediente['Religion'].'" class="form-control">';
		 		echo'</div>';

		 		echo'<div>';
		 			echo'<label for="escol">Escolaridad</label>';
		 			echo'<input type="text" name="escol" value="'.$expediente['Escolaridad'].'" class="form-control">';
		 		echo'</div>';
				
				echo'<div>';
		 			echo'<label for="profesion">Profesion</label>';
		 			echo'<input type="text" name="profesion" value="'.$expediente['Profesion'].'" class="form-control">';
		 		echo'</div>';

		 		echo'<nav aria-label="..." class="botones">';
  					echo'<ul class="pager">';
    				echo'<li class="previous"><a href="DatosPersonalesV.php?n_exp='.$expediente['Numero_Expediente'].'"><span aria-hidden="true">&larr;</span> Anterior</a></li>';
    				echo'<li class="next"><a href="DatosPersonales3V.php?n_exp='.$expediente['Numero_Expediente'].'">Siguiente <span aria-hidden="true">&rarr;</span></a></li>';
  					echo'</ul>';
				echo'</nav>';
		 	}
		 	?>
		 	
			</div>
	 	</form>
	</center>


 </body>
 </html>