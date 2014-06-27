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

<button class="nav-trigger">Menú</button>

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
				<h1 class="center">Administrador de la Página</h1>
				
			</div>
		</div>
	<!-- ******** GOOGLE END ******** -->
	
<?php


if (!isset($_SESSION['usuario'])) 
{
echo "<script> window.location.replace('login.php') </script>";
exit();
}
else
{ 
require 'db2.php';
//make variables available
$inmueble = $_POST['inmueble'];
$lugar = $_POST['lugar'];
$zona = $_POST['zona'];
$tipo = $_POST['tipo'];
$edad = $_POST['edad'];
$area = $_POST['area'];
$descripcion = $_POST['descripcion'];
$valor = $_POST['valor'];
$image_tempname = $_FILES['image_filename']['name'];
$today = date("Y-m-d");
//upload image and check for image type
$ImageDir ="fotos/";
$ImageName = $ImageDir . $image_tempname;
if (move_uploaded_file($_FILES['image_filename']['tmp_name'], 
$ImageName)) {
//get info about the image being uploaded
list($width, $height, $type, $attr) = getimagesize($ImageName);
//**delete these lines
switch ($type) {
case 1:
$ext = ".gif";
break;
case 2:
$ext = ".jpg";
break;
case 3:
$ext = ".png";
break;
default:
echo "El archivo no es GIF, JPG, o PNG";
}}
//**end of deleted lines
//**insert these new lines
if ($type > 3) {
echo "El archivo no es GIF, JPG, o PNG";
} else {
//image is acceptable; ok to proceed
//**end of inserted lines
//insert info into image table
$insert = "INSERT INTO coinor (inmueble, lugar, zona, tipo, edad, area, descripcion, valor, fecha) VALUES ('$inmueble', '$lugar', '$zona', '$tipo', '$edad', '$area', '$descripcion', '$valor', '$today')";
$insertresults = mysql_query($insert)
or die(mysql_error());
$lastpicid = mysql_insert_id();
//change the following line:
$newfilename =  $ImageDir . $lastpicid . ".jpg";
//**insert these lines
if ($type == 2) {
rename($ImageName, $newfilename);
} else {
if ($type == 1) {
$image_old = imagecreatefromgif($ImageName);
} elseif ($type == 3) {
$image_old = imagecreatefrompng($ImageName);
}
//"convert" the image to jpg
$image_jpg = imagecreatetruecolor($width, $height);
imagecopyresampled($image_jpg, $image_old, 0, 0, 0, 0, $width, $height, $width, $height);
imagejpeg($image_jpg, $newfilename);
imagedestroy($image_old);
imagedestroy($image_jpg);
}
echo "<div class='row'><div class='span12'><h2 class='center'>Inmueble creado exitosamente</h2><div class='message'><div id='alert'></div></div></div></div>"; 
//**end of inserted lines
}
}
?>  
		
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
		
<form action='subirfoto.php' method='POST' enctype='multipart/form-data' >
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
<td>Área:</td>
<td><input type="text"  name="area"></td>
</tr>

<tr>
<td>Descripción:</td>
<td><textarea  name="descripcion"></textarea></td>
</tr>

<tr>
<td>Valor:</td>
<td><input type="text"  name="valor"></td>
</tr>

<tr>
<td>Fotografía:</td>
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
</form>



	<!-- ******** RESERVATION START ******** -->
	
	</article>
	
	
</body>
</html>
