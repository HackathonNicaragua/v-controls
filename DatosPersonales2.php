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
 	<script type="text/javascript" src="js/controldedisenio.js" ></script>
 	<title>Datos personales2</title>
 </head>
 <body>
 	<?php 
 		setcookie('n_exo',$_POST['n_expe'],time()+2220);
 		setcookie('nom',$_POST['nombres'],time()+2220);
 		setcookie('apell',$_POST['apellidos'],time()+2220);
 		setcookie('ed',$_POST['edad'],time()+2220);
 		setcookie('ced',$_POST['cedula'],time()+2220);
 		setcookie('inss',$_POST['inss'],time()+2220);
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
	 	
	 	<form name="datosper" method="post" action="DatosPersonales3.php">
	 		<div class="input-group"> 			
	 	
	 	 		<div>
		 			<label for="sexo">Sexo</label>
					<select name="sexo" class="form-control">
						<option value="Masculino">Masculino</option>}
						<option value="Femenino">Femenino</option>}
					</select>	
		 		</div>
		 		
		 			<label for="etnia">Etnia</label>
		 			<select name="etnia" class="form-control" >
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


				<div>
					<label for="nacimiento">Lugar de Nacimiento</label>
					<input type="text" name="nacimiento" class="form-control">
				</div>

				<div>
		 			<label for="religion">Religion</label>
		 			<input type="text" name="religion" class="form-control">
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
		 			<input type="text" name="profesion" class="form-control">
		 		</div>

				<nav aria-label="..." class="botones">
  					<ul class="pager">
    					<li ><a href="DatosPersonalesa.php"><button type="button" class="btn btn-default">Anterior</button></a></li>
    					<li ><a><input type="submit" class="btn btn-default" value="Siguiente"></a></li>
  					</ul>
				</nav>
			</div>
	 	</form>
	</center>


 </body>
 </html>