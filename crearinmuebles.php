<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="ISO-8859-1">
	<title>COINOR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="HTML Theme">
	<meta name="author" content="COINOR">
	
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/base.css" rel="stylesheet" type="text/css">
	<link href="css/adv.css" rel="stylesheet" type="text/css">
	<link href="css/fwslider.css" rel="stylesheet" type="text/css">
	<link href="css/timepicker.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC' rel='stylesheet' type='text/css'>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery-ui-timepicker-addon.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
	<script src="js/settings-inner.js"></script>
	<script src="js/jquery.form.js"></script>
	


</head>

<body class="inner">

	<?php if (!isset($_SESSION['usuario'])) {echo "<script> window.location.replace('login.html') </script>"; exit();} else { echo"<header>";} ?> 
	
		<div class="nav-bar">
			<div class="nav-inside">
			</div>
		</div>
		
		<div class="wrapper">
		
<!-- ******** LOGO START ******** -->
<div class="logo">
<img src="images/logo.png" />



</div>
<!-- ******** LOGO END ******** -->

<!-- ******** NAVIGATION START ******** -->
<nav class="main">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="nosotros.html">Nosotros</a></li>
<li><a href="inmuebles.php">Inmuebles</a></li>
<li><a href="contacto.html">Contacto</a></li><li><a href="admin.php">Admin</a></li>
</ul>
</nav>

<button class="nav-trigger">Men�</button>

<!-- ******** NAVIGATION END ******** -->

</div>


</header>

<!-- ******** REVIEWS START ******** -->

<!-- ******** REVIEWS END ******** -->

<article class="wrapper">

<!-- ******** HIGHLIGHT START ******** -->


<div class="row">
<div class="span12">

</div>
</div>
<p>&nbsp;</p><p>&nbsp;</p>
	<article class="wrapper">
	
	<!-- ******** GOOGLE MAP START ******** -->
		<div class="row">
			<div class="span12">
				<h1 class="center">Administrador de la P�gina</h1>
				
			</div>
		</div>
	<!-- ******** GOOGLE END ******** -->
		
	<!-- ******** RESERVATION START ******** -->
		<div class="row">
			<div class="span12">
				<hr>
				<h2 class="center">Crear Inmuebles</h2>
				<div class="message">
					<div id="alert"></div>
				</div>
			</div>
		</div>
		
<form action='crearinmueble.php' method='POST' enctype='multipart/form-data' >
<div class="row">
<div class="span6">
<table>
<tbody>

<tr>
<td>Inmueble en: </td>
<td><select name="inmueble">
<option value="1">Arriendo</option>
<option value="2">Venta</option>
</select></td>
</tr>

<tr>
<td>Lugar:</td>
<td><input type="text"  name="lugar"></td>
</tr>

<tr>
<td>Zona:</td>
<td><input type="text"  name="zona"></td>
</tr>

<tr>
<td>Tipo:</td>
<td><input type="text"  name="tipo"></td>
</tr>

<tr>
<td>Edad:</td>
<td><input type="text"  name="edad"></td>
</tr>

<tr>
<td>�rea:</td>
<td><input type="text"  name="area"></td>
</tr>

<tr>
<td>Descripci�n:</td>
<td><textarea  name="descripcion"></textarea></td>
</tr>

<tr>
<td>Valor:</td>
<td><input type="text"  name="valor"></td>
</tr>

<tr>
<td>Fotograf�a:</td>
<td><input  type='file'  name='image_filename'></td>
</tr>

<tr>
<td><input type="submit" value="Enviar"></td>
<td></td>
</tr>

</tbody>
</table>
</div>
</div>



	<!-- ******** RESERVATION START ******** -->
	
	</article>
	
	
</body>
</html>
