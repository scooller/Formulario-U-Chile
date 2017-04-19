<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="general.css">

</head>

<body>
<div class="container-fluid gral">
	<header><div class="container">
		<img src="titulo.svg" class="title-img">
		<p class="txt">Sigue los pasos, inscribete y se parte de La U de los Hinchas</p>
		<div class="row fechas">
			<div class="col-md-2">
				<strong>SANTIAGO</strong>
				26 de Abril
			</div>
			<div class="col-md-2">
				<strong>ARICA</strong>
				29 de Abril
			</div>
			<div class="col-md-2">
				<strong>LA SERENA</strong>
				06 de Mayo
			</div>
			<div class="col-md-2">
				<strong>CONCEPCIÓN</strong>
				07 de Mayo
			</div>
			<div class="col-md-2">
				<strong>SANTIAGO</strong>
				10 de Mayo
			</div>
			<div class="col-md-2">
				<strong>TEMUCO</strong>
				14 de Mayo
			</div>
		</div>
		<div class="row circulos">
			<div class="col-md-4">
				<div class="num">#1</div>
				<div class="txt">
					 Inscríbete y crea tu perfil de hincha oficial de la U.
				</div>
				<img src="circulo-bg.svg" class="bg">
			</div>
			<div class="col-md-4">
				<div class="num">#2</div>
				<div class="txt">
					 Asiste a las pruebas masivas en la ciudad más cercana a la hora y lugar señalados.
				</div>
				<img src="circulo-bg.svg" class="bg">
			</div>
			<div class="col-md-4">
				<div class="num">#3</div>
				<div class="txt">
					 Participa y gánate un cupo en La U de los Hinchas.
				</div>
				<img src="circulo-bg.svg" class="bg">
			</div>
		</div>
	</div></header>
	<section>
<?php
if(isset($_POST['porque'])):
		//Cambiar AQUI los datos de la coneccion para la Base de Datos
		$mysqli = new mysqli("localhost", "my_user", "my_password", "ddbb");
		// Check connection
		if (mysqli_connect_errno()):
  			$msj='<h2>Failed to connect to MySQL: </h2><p>' . mysqli_connect_error().'</p>';
		else:
			if ($insert = $mysqli->prepare("INSERT INTO formulario (nombre,ciudad,correo,rut,juegas,nacimiento,porque) VALUES (?,?,?,?,?,?,?)")) :
				$insert->bind_param("sssssss", $nombre, $ciudad, $correo, $rut, $juegas, $nacimiento, $porque);
				$nombre=$_POST['nombre'];
				$ciudad=$_POST['ciudad'];
				$correo=$_POST['correo'];
				$rut=$_POST['rut'];
				$juegas=$_POST['juegas'];
				$nacimiento=$_POST['nacimiento'];
				$porque=$_POST['porque'];
				
				$insert->execute();
				$msj='<h2><i class="fa fa-futbol-o" aria-hidden="true"></i> Gracias por contestar</h2>
				<p>Pronto nos contactaremos</p>';
			endif;
			$mysqli->close();
		endif;
?>
	<div class="container">
	<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $msj; ?>
	</div>
	</div>
<?php else: ?>
		<form enctype="application/x-www-form-urlencoded" method="post" class="container">
			<h3>Ficha de inscripción</h3>
			<div class="form-group">
				<input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="ciudad" id="city" placeholder="Ciudad" required>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="rut" id="rut" maxlength="12" placeholder="RUT" required>
			</div>
			<div class="form-group">
				<select name="juegas" class="form-control">
				  <option disabled selected>¿De qué juegas?</option>
				  <option>Defensa</option>
				  <option>Medio Campo</option>
				  <option>Delantero</option>
				  <option>Arquero</option>
				</select>
			</div>
			<div class="form-group">
				<input type="date" class="form-control" name="nacimiento" placeholder="Fecha de nacimiento" required>
			</div>
			<textarea class="form-control" rows="3" name="porque" placeholder="¿Por qué quieres jugar por la U?" required></textarea>
			<button type="submit" class="btn btn-red">Enviar</button>
		</form>
<?php endif; ?>
	</section>
	<footer><div class="container">
		<p class="txt">Tambien puedes parcipar en nuestras Redes Sociales</p>
		<div class="row circulos">
			<div class="col-md-4">
				<div class="num"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
				<div class="txt">
					 Sube tu video de 15 segundos haciendo una jugada o demostrando tu amor por el club y estarás participando. #LaUdeLosHinchas
				</div>
				<img src="circulo-bg.svg" class="bg">
			</div>
			<div class="col-md-4">
				<div class="num"><i class="fa fa-twitter" aria-hidden="true"></i></div>
				<div class="txt">
					 Sube tu mensaje en 140 caracteres contando por qué deberías jugar el partido contra la U de todos los tiempos. #LaUdeLosHinchas
				</div>
				<img src="circulo-bg.svg" class="bg">
			</div>
			<div class="col-md-4">
				<div class="num"><i class="fa fa-instagram" aria-hidden="true"></i></div>
				<div class="txt">
					 Sube tu foto de por qué deberías jugar el partido contra la U de todos los tiempos. #LaUdeLosHinchas
				</div>
				<img src="circulo-bg.svg" class="bg">
			</div>
		</div>
	</div></footer>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoKJQD7-i70HLGg4Ed3RLaPPXeWF5GIQU&libraries=places&callback=initialize" async defer></script>
<script src="jquery.rut.min.js"></script>
<script src="general.js"></script>


</body>
</html>