<?php
$mysqli = new mysqli("localhost", "udechile", "T9,UATS#ndf)", "udechile");
$dias=array('Dom','Lun','Mar','Mie','Jue','Vie','Sab');
//--
if(isset($_GET['tramo'])):
	$select = $mysqli->prepare("SELECT id,locacion,fecha,tramo,horario FROM lugar WHERE tramo=? AND locacion=?");
	$select->bind_param("ss", $_GET['tramo'],$_GET['ciudad']);
	$select->execute();
	$select->bind_result($col1,$col2,$col3,$col4,$col5);
	while($select->fetch()){
		$dia=$dias[date("w",strtotime($col3))];
		$fecha=$dia.' '.date("d-m",strtotime($col3));
		echo '<option value="'.$col1.'">'.$fecha.' a las '.$col5.'</option>';
	}
	$select->close();
	die();
endif;
?>
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

<link rel="stylesheet" href="new.css">

<meta property="og:title" content="#YoJuegoPorLaU"/>
<meta property="og:image" content="http://uchile.javierecheverria.cl/img/imagen-grafica-U2.jpg"/>
<meta property="og:site_name" content="#YoJuegoPorLaU"/>
<meta property="og:description" content="#YoJuegoPorLaU Los 90 años de la U se celebran en la cancha."/>
<meta property="og:type" content="website"/>

</head>



<body>
	<header>
		<div class="barra container-fluid"><div class="row">
			<div class="col-sm-4">
				<img src="img/logo-U.svg" class="logo">
				<div id="share"></div>
				<span class="hidden-sm hidden-xs"> UDECHILE.CL</span>
			</div>
			<div class="col-sm-6 col-sm-offset-2"><strong>#YoSoyDeLaU</strong> | 90 años - Más que una pasión</div>
		</div></div>
		<!-- slider -->
		<div id="carousel-images" class="carousel slide" data-ride="carousel">
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<div class="item active">
			  	<img src="img/imagen-yojuegoporlaU.jpg" style="width:100%">
			  	<div class="carousel-caption imagen">
					<div class="row">
						<div class="col-sm-6"><a href="#fechas" class="btn">VER CIUDADES Y FECHAS</a></div>
						<div class="col-sm-6"><a href="#form" class="btn">¡QUIERO PROBARME!</a></div>
					</div>
				</div>
			</div>		  	
			<!--<div class="item active">
			  <img src="img/IMAGEN-WEB.jpg" style="width:100%">
			  <div class="carousel-caption imagen">
			  	<img src="img/hastag.svg" class="img">
				<img src="img/texto.svg" class="txt">
				<div class="hidden-sm hidden-xs">
					<div class="desc">
					Ponte la U en el pecho y salta a la cancha para celebrar este aniversario como nunca.<br>Sigue los pasos, inscríbete en tu ciudad más cercana y juégatela por los 90 años de la U en una experiencia inolvidable. 
					</div>
					<div class="row">
						<div class="col-sm-6"><a href="#fechas" class="btn">VER CIUDADES Y FECHAS</a></div>
						<div class="col-sm-6"><a href="#form" class="btn">¡QUIERO PROBARME!</a></div>
					</div>
				</div>
			  </div>
			</div>-->
			
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-images" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-images" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- //slider -->
	</header>
	<section class="container-fluid info">
		<h2 class="title" id="fechas">REVISA LAS FECHAS Y HORARIOS POR CIUDAD</h2>
		<div class="desc">Inscríbete en las pruebas masivas, aprovecha tu oportunidad y gánate la confianza del técnico para pasar del tablón a la cancha.</div>
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#arica" aria-controls="arica" role="tab" data-toggle="tab">ARICA 29/04</a>
				</li>
				<li role="presentation">
					<a href="#serena" aria-controls="serena" role="tab" data-toggle="tab">LA SERENA 06/05</a>
				</li>
				<li role="presentation">
					<a href="#concepcion" aria-controls="concepcion" role="tab" data-toggle="tab">CONCEPCIÓN 07/05</a>
				</li>
				<li role="presentation">
					<a href="#santiago" aria-controls="santiago" role="tab" data-toggle="tab">SANTIAGO 03/05</a>
				</li>
				<li role="presentation">
					<a href="#santiago2" aria-controls="santiago2" role="tab" data-toggle="tab">SANTIAGO 10/05</a>
				</li>
				<li role="presentation">
					<a href="#temuco" aria-controls="temuco" role="tab" data-toggle="tab">TEMUCO 13/05</a>
				</li>
			 </ul>
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="arica">
					Fecha: 29 de abril 2017<br>
					Horarios:
					<ul>
						<li>+45 años  - 9:00 - 10:00 horas</li>
						<li>31 a 45 años - 10:00 - 11:00 horas</li>
						<li>18 a 30 años - 11:00 - 12:00 horas</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="serena">
					Fecha: 06 de Mayo 2017<br>
					Horarios:
					<ul>
						<li>+45 años - 9:00 - 10:00 horas</li>
						<li>31 a 45 años - 10:00 - 11:00 horas</li>
						<li>18 a 30 años - 11:00 - 12:00 horas</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="concepcion">
					Fecha: 07 de Mayo 2017<br>
					Horarios:
					<ul>
						<li>+45 años  - 15:00- 16:00 horas</li>
						<li>31 a 45 años - 16:00 - 17:00 horas</li>
						<li>18 a 30 años - 17:00 - 18:00 horas</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="temuco">
					Fecha: 13 de Mayo 2017<br>
					Horarios:
					<ul>
						<li>+45 años - 9:00 - 10:00 horas</li>
						<li>31 a 45 años - 10:00 - 11:00 horas</li>
						<li>18 a 30 años - 11:00 - 12:00 horas</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="santiago">
					Fecha: 03 de Mayo 2017<br>
					Horarios:
					<ul>
						<li>+45 años - 9:00 - 10:00 horas</li>
						<li>31 a 45 años - 10:00 - 11:00 horas</li>
						<li>18 a 30 años - 11:00 - 12:00 horas</li>
<br/>
						<li>18 a 30 años - 12:00 - 12:15 horas</li>
						<li>31 a 45 años - 12:15 - 12:30 horas</li>
						<li>31 a 45 años - 12:30 - 12:45 horas</li>
						<li>+45 años - 12:45 - 13:00 horas</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="santiago2">
					Fecha: 10 de Mayo 2017<br>
					Horarios:
					<ul>
						<li>+45 años - 9:00 - 10:00 horas</li>
						<li>31 a 45 años - 10:00 - 11:00 horas</li>
						<li>18 a 30 años - 11:00 - 12:00 horas</li>
<br/>
						<li>18 a 30 años - 12:00 - 12:15 horas</li>
						<li>31 a 45 años - 12:15 - 12:30 horas</li>
						<li>31 a 45 años - 12:30 - 12:45 horas</li>
						<li>+45 años - 12:45 - 13:00 horas</li>
					</ul>
				</div>
			  </div>
		</div>
	</section>
	<section class="container-fluid formulario">

<?php

if(isset($_POST['rut'])):
		



		$msj='<h2><i class="fa fa-futbol-o" aria-hidden="true"></i> ¡Felicitaciones! Tu cupo para las pruebas masivas ya está reservado.</h2>

				<p>En los próximos días te llegará un mail con toda la información respecto a tu prueba.</p>';

		//Cambiar AQUI los datos de la coneccion para la Base de Datos

		

		// Check connection

			$nombre=$_POST['nombre'];
			$rut=$_POST['rut'];
			$nacimiento=$_POST['nacimiento'];
			$correo=$_POST['correo'];
			$juegas=$_POST['juegas'];
			$categoria=$_POST['categoria'];
			$horario=$_POST['horario'];
			$porque=$_POST['porque'];
			//--		
			$select = $mysqli->prepare("SELECT rut FROM formulario_new WHERE rut=?");
			$select->bind_param("s", $rut);
			$select->execute();
			$select->bind_result($selRut);
			$select->fetch();
			$select->close();
			if(!empty($selRut)):		
				$msj='<h2>Atención:</h2>
					<p>RUT ya registrado</p>';
			else :
				$select = $mysqli->prepare("SELECT cupos,fecha,horario FROM lugar WHERE id=?");
				$select->bind_param("i", $horario);
				$select->execute();
				$select->bind_result($cupos,$fcol2,$fcol3);
				$select->fetch();
				$select->close();
		
				if(intval($cupos) <= 0):
					$msj='<h2>Atención:</h2>
							<p>CUPOS agotados</p>';
				elseif ($insert = $mysqli->prepare("INSERT INTO formulario_new (nombre,rut,nacimiento,correo,juegas,porque,categoria,id_lugar) VALUES (?,?,?,?,?,?,?,?)")) :

					$insert->bind_param("sssssssi", $nombre, $rut, $nacimiento, $correo, $juegas, $porque, $categoria, $horario);
					$insert->execute();
					$insert->close();
					//cupo
					$update = $mysqli->prepare("UPDATE lugar SET cupos=cupos-1 WHERE id=?");
					$update->bind_param("i", $horario);
					$update->execute();
					$update->close();

					//envio mail
					$dia=$dias[date("w",strtotime($fcol2))];
					$fecha=$dia.' '.date("d-m",strtotime($fcol2));
					$to = strip_tags($correo);
					$subject = 'Correo desde U de Chile (Inscripcion)';

					$headers = "From: " . strip_tags('contacto@udechile.cl') . "\r\n";
					$headers .= "Reply-To: ". strip_tags('contacto@udechile.cl') . "\r\n";
					//$headers .= "CC: susan@example.com\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

					$message = '<html>';
					$message .= '<!--[if (gte mso 9)|(IE)]>
    <style type="text/css">
        table {border-collapse: collapse;}
    </style>
    <![endif]-->
    <style type="text/css">
    /* Basics */
    body {
        margin: 0 !important;
        padding: 0;
        background-color: #283885;
    }
    table {
        border-spacing: 0;
        font-family: sans-serif;
        color: #333333;
    }
    td {
        padding: 0;
    }
    img {
        border: 0;
    }
    div[style*="margin: 16px 0"] { 
        margin:0 !important;
    }
    .wrapper {
        width: 100%;
        table-layout: fixed;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    .webkit {
        max-width: 600px;
        margin: 0 auto;
    }
    .outer {
    Margin: 0 auto;
        width: 100%;
        max-width: 600px;
    }
    .full-width-image img {
        width: 100%;
        max-width: 600px;
        height: auto;
    }
    .inner {
        padding: 10px;
    }
    p {
        Margin: 0;
    }
    a {
        text-decoration: none;
    }
    a[href^=tel]{ color:#57595b; text-decoration:none;
    }
    .h1 {
        font-size: 30px;
        font-weight: bold;
        Margin-bottom: 18px;
        color:#31b133;
    }
    .h2 {
        font-size: 18px;
        font-weight: bold;
        Margin-bottom: 12px;
    }
     
    /* One column layout */
    .one-column .contents {
        text-align: center;
    }
    .one-column p {
        font-size: 16px;
        Margin-bottom: 10px;
        color:#57595b;
    }

    /*Two column layout*/
    .two-column {
        text-align: center;
        font-size: 0;
    }
    .two-column .column {
        width: 100%;
        max-width: 300px;
        display: inline-block;
        vertical-align: top;
    }
    .contents {
        width: 100%;
    }
    .two-column .contents {
        font-size: 16px;
        text-align: center;
    }
    .two-column img {
        width: 100%;
        max-width: 280px;
        height: auto;
    }
    .two-column .text {
        padding-top: 10px;
    }
    /*Three column layout*/
    .three-column {
        text-align: center;
        font-size: 0;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .three-column .column {
        width: 100%;
        max-width: 200px;
        display: inline-block;
        vertical-align: top;
    }
    .three-column .contents {
        font-size: 16px;
        text-align: center;
    }
    .three-column img {
        width: 100%;
        max-width: 180px;
        height: auto;
    }
    .three-column .text {
        padding-top: 10px;
    }
    </style>

	</head>
<body bgcolor="#283885">
<center class="wrapper" style="width: 100%; table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
        <div class="webkit" style="max-width: 600px; margin: 0 auto;">
        
 <table width="600px" border="0" bgcolor="#283885">
  <tbody>
    <tr>
      <td><img src="http://uchile.javierecheverria.cl/img_mailing/hd5.jpg"></td>
      
    </tr>
     <tr>
     
      <td bgcolor="#283885">
        </td>
      
    </tr>
  </tbody>
</table>

<table  border="0" bgcolor="#283885" style="color: #FFFFFF">
  <tbody>
    <tr>
      <td width="10px">&nbsp;</td>
      <td  width="580px">
      	<p align="center"><br>
          Prep&aacute;rate para llegar 60 minutos antes de tu hora <small>('.$fecha.' a las '.$fcol3.')</small> y hacer calentamiento previo, porque m&aacute;s que un partido, es una oportunidad para demostrar tu amor por el Club en la cancha.        </p>
      	<p align="center"><br>
          Atte.<br>
Jorge Soc&iacute;as, Entrenador de La U de Todos Los Hinchas <br>
</p>
     <br/>
      </td>
      <td width="10px">&nbsp;</td>
    </tr>
  </tbody>
</table>

  </div>
    </center>
</body>';
					$message .= '</body></html>';

					$mail=mail($to, $subject, $message, $headers);
					if(!$mail):
						$e=error_get_last();
						$msj='<h2>Error:</h2><p>Error al enviar correo <em>'.$e['message'].'</em></p>';
					endif;

				else:

					$msj='<h2>Error:</h2>

						<p>Error al grabar</p>'.$mysqli->error;

				endif;
			endif;

			$mysqli->close();

?>

	<div class="container">

	<div class="alert alert-info alert-dismissible" role="alert">

		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

		<?php echo $msj; ?>

	</div>

	</div>

<?php else: 
		if(isset($_GET['old'])):
?>
		<form action="index-new.php" enctype="application/x-www-form-urlencoded" method="get" class="container form-horizontal" id="form">
			<h4 class="title">LLENA ESTE FORMULARIO Y PREPÁRATE</h4>
			<p>Ingrese su RUT para continuar</p>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Ingrese su RUT:</label>				
				<div class="col-sm-10">
					<input type="text" class="form-control" name="rut" id="rut" maxlength="12" placeholder="RUT" required>
				</div>
			</div>
<?php 	else: ?>
		<form action="index-new.php" enctype="application/x-www-form-urlencoded" method="post" class="container form-horizontal" id="form">
			<h4 class="title">LLENA ESTE FORMULARIO Y PREPÁRATE</h4>
			<p>Completa los campos del formulario y juégatela por un cupo en el campo de juego.<br>
			Los #90AñosDeLaU se celebran en la cancha.</p>			
			
			<?php
			$disable='';
			$col1='';
			$col2='';
			$col3='';
			$col4='';
			$col5='';
			if(isset($_GET['rut'])):
				$select = $mysqli->prepare("SELECT nombre,correo,rut,nacimiento,porque FROM formulario WHERE rut=? LIMIT 1");
				$select->bind_param("s", $_GET['rut']);
				$select->execute();
				$select->bind_result($col1,$col2,$col3,$col4,$col5);
				$select->fetch();
				$select->close();
				$disable=' disabled';
			endif;
			?>

			<div class="form-group"><div class="col-sm-12">
				<input type="text" class="form-control" name="nombre" placeholder="Nombre completo" value="<?php echo $col1; ?>"<?php echo $disable; ?> required>
				<?php if(!empty($disable)): ?>
				<input type="hidden" name="nombre" value="<?php echo $col1; ?>">
				<?php endif; ?>
			</div></div>
			<div class="form-group"><div class="col-sm-12">
				<input type="text" class="form-control" name="rut" id="rut" maxlength="12" placeholder="RUT" value="<?php echo $col3; ?>"<?php echo $disable; ?> required>
				<?php if(!empty($disable)): ?>
				<input type="hidden" name="rut" value="<?php echo $col3; ?>">
				<?php endif; ?>
			</div></div>
			<div class="form-group">
				<label for="nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>				
				<div class="col-sm-10">
					<input type="date" id="nacimiento" class="form-control" name="nacimiento" placeholder="dd-mm-aaaa" value="<?php echo $col4; ?>"<?php echo $disable; ?> required>
					<?php if(!empty($disable)): ?>
					<input type="hidden" name="nacimiento" value="<?php echo $col4; ?>">
					<?php endif; ?>
				</div>
				
			</div>
			<div class="form-group"><div class="col-sm-12">
				<input type="email" class="form-control" name="correo" placeholder="Correo electrónico" value="<?php echo $col2; ?>"<?php echo $disable; ?> required>
				<?php if(!empty($disable)): ?>
				<input type="hidden" name="correo" value="<?php echo $col2; ?>">
				<?php endif; ?>
			</div></div>
			<div class="form-group"><div class="col-sm-12">
				<select name="juegas" class="form-control" required>
				  <option disabled selected>¿De qué juegas?</option>
				  <option>Defensa</option>
				  <option>Medio Campo</option>
				  <option>Delantero</option>
				  <option>Arquero</option>
				</select>
			</div></div>
			<div class="form-group"><div class="col-sm-12">
				<select name="ciudad" class="form-control" required>
				  <option disabled selected>¿En qué ciudad te quieres probar?</option>
				  <option value="arica">Arica</option>
				  <option value="santiago">Santiago</option>
				  <option value="serena">La Serena</option>
				  <option value="concepcion">Concepción</option>
				  <option value="temuco">Temuco</option>    
				</select>
			</div></div>
			<div class="form-group"><div class="col-sm-12">
				<select name="categoria" class="form-control" required disabled>
				  <option disabled selected>A qué categoría perteneces:</option>
				  <option value="18 a 30">18 a 30 años</option>
				  <option value="31 a 45">30 a 45 años</option>
				  <option value="+45">+45 años</option>
				</select>
			</div></div>
			<div class="form-group"><div class="col-sm-12">
				<select name="horario" class="form-control" required disabled>
				  <option disabled selected>¿Elige tu horario?</option>
				</select>
			</div></div>
			
			<!--
			<div class="form-group">
				<select name="hora" class="form-control" required disabled>
				  <option disabled selected>¿A qué hora puedes probarte?</option>
				</select>
			</div>
			-->
			<textarea class="form-control" rows="3" name="porque" placeholder="¿Por qué quieres jugar por la U?" required><?php echo $col5; ?></textarea>
			<div class="checkbox">
				<input type="checkbox" required> <a href="BASES YOJUEGOPORLAU v3.1.pdf" target="_blank">Acepto términos legales</a>
			</div>
<?php endif; ?>
			<button type="submit" class="btn btn-red">Enviar</button>

		</form>		
<?php endif; ?>

	</section>

	<footer><div class="container">
		UDECHILE.CL #YoSoyDeLaU   |   90 años - Más que una pasión   |   Todos los derechos reservados 2017.
	</div></footer>

</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<script src="locales/bootstrap-datepicker.es.min.js"></script>

<script src="general.js"></script>

<script src="jquery.rut.min.js"></script>

<script type="text/javascript">
$(function() {
	$('input[type="date"]').datepicker({
        format: "yyyy-mm-dd",
        weekStart: 1,
        language: "es",
        calendarWeeks: true
    });
	$("#share").jsSocials({
		showLabel: false,
    	showCount: false,
		shares: ["twitter", "facebook"]
    });
});
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />
</body>

</html>