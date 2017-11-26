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
	 <?php 
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
					echo'<li role="presentation" ><a href="DatosPersonales2V.php?n_exp='.$expediente['Numero_Expediente'].'">DatosPersonales2</a></li>';
					echo'<li role="presentation" class="active"><a href="DatosPersonales3V.php?n_exp='.$expediente['Numero_Expediente'].'">DatosPersonales3</a></li>';
				echo'</ul>';
		 	echo'</div>';

				 	echo'<form name="datosper" method="post" action="">';
				 		echo'<div class="input-group"> 			';
				 		
					 		echo'<div>';
					 			echo'<label for="direccion">Direccion</label>';
					 			echo'<input type="text" name="direccion" value="'.$expediente['Direccion_Habitual'].'" class="form-control">	';
					 		echo'</div>';

					 		echo'<div>';
					 			echo'<label for="npadre">Nombre del Padre</label>';
					 			echo'<input type="text" pattern="[A-Za-z]" name="npadre" value="'.$expediente['Nombre_Padre'].'" class="form-control" disabled>';
					 		echo'</div>';

					 		echo'<div>';
					 			echo'<label for="nmadre">Nombre de la madre</label>';
					 			echo'<input type="text" pattern="[A-Za-z]" name="apellidos" value="'.$expediente['Nombre_Madre'].'" class="form-control" disabled>';
					 		echo'</div>';


							echo'<nav aria-label="..." class="botones">';
			  					echo'<ul class="pager">';
			    					echo'<li class="previous"><a href="DatosPersonales2V.php?n_exp='.$expediente['Numero_Expediente'].'"><span aria-hidden="true">&larr;</span> Anterior</a></li>';
			    					echo'<li class="next"><a onclick="">Actualizar <span aria-hidden="true">&rarr;</span></a></li>';
			  					echo'</ul>';
							echo'</nav>';
						}
						?>
				</div>
		 	</form>
	</center>
 </body>
 </html>