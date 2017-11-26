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
	<title>Nuevo usuario</title>
	
</head>
<body>
	
 <center>

	 	<div id="navs">
	 		<ul class="nav nav-tabs nav-justified">
			  <li role="presentation" class="active"><a href="ListaExpedientes.php">Regresar</a></li>

			</ul>
		
	 	</div>
				
		
	 	<form name="datosper" method="post" action="nuevouser.php">
	 		<div class="input-group"> 			
	 		    <div>
		 			<label for="id">Codigo usuario</label>
		 			<input type="text"  name="id" placeholder="" class="form-control">	
		 		</div>
		 		<div>
		 			<label for="usuario">Usuario</label>
		 			<input type="text"  name="usuario" placeholder="" class="form-control">	
		 		</div>
		 		<div>
		 			<label for="contra">Contraseña</label>
		 			<input type="text"  name="contra" placeholder="" class="form-control">	
		 		</div>
                <div>
		 			<label for="niveles">Nivel</label>
		 			<input type="text"  name="niveles" placeholder="" class="form-control">	
		 		</div>
		 		
				<nav aria-label="..." class="botones">
  					<ul class="pager">
    					<li ><a><input type="submit" class="btn btn-default" value="Siguiente"></a></li>
  					</ul>
				</nav>
			</div>
	 	</form>
	</center>
</body>
</html>
