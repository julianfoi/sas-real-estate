<!doctype html>
<html>
<head>

<meta charset="ISO-8859-1">
<title>COINOR SAS</title>
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
<link href="css/responsive-carousel.css" rel="stylesheet" type="text/css">
<link href="css/responsive-carousel.slide.css" rel="stylesheet" type="text/css">
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">

<!-- Google Fonts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/fwslider.js"></script>
<script src="js/responsive-carousel.js"></script>
<script src="js/responsive-carousel.touch.js"></script>
<script src="js/responsive-carousel.drag.js"></script>
<script src="js/responsive-carousel.autoplay.js"></script>
<script src="js/settings-home.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script>
$(document).ready(function() {
$('.fancybox').fancybox();
});
</script>

</head>

<body class="home">

<header>

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
<li class="active"><a href="inmuebles.php">Inmuebles</a></li>
<li><a href="contacto.html">Contacto</a></li>
</ul>
</nav>

<button class="nav-trigger">Menú</button>

<!-- ******** NAVIGATION END ******** -->

</div>

<!-- ******** FULL WIDTH SLIDER START ******** -->
<div id="fwslider">
<div class="slider_container">

<?php
require './db/conexionsql.php';
require './db/db.php';
$conectarme->conectar();
$query3="SELECT * FROM coinor ";
$result3=mysql_query($query3) or die(mysql_error());
while ($opciones3=  mysql_fetch_array($result3))
{
$foto3 = $opciones3['foto_id'];
echo "
<div class='slide'> 
<img src='fotos/".$foto3.".jpg' />
<div class='slide_content'>
<div class='slide_content_wrap'>
<h4 class='title'>".$opciones3['tipo']." en ".$opciones3['lugar']."</h4>
<a class='readmore' href='http://www.google.com/'>
<form action='inmueble.php' method='POST'>
<input type='hidden' name='inmueble' value='".$opciones3['foto_id']."'>
<input type='submit' value='Detalles'></form></a>
</div>
</div>
</div>
";
}
?>    


</div>
<div class="timers"></div>
<div class="slidePrev"><span></span></div>
<div class="slideNext"><span></span></div>
</div> 
<!-- ******** FULL WIDTH SLIDER END ******** -->

</header>

<!-- ******** REVIEWS START ******** -->

<!-- ******** REVIEWS END ******** -->

<article class="wrapper">

<!-- ******** HIGHLIGHT START ******** -->


<div class="row">
<div class="span12">
<hr>
</div>
</div>

<!-- ******** BLOG START ******** -->
<div class="span12">
<h1>Especialistas en Finca Raíz en Bogotá y Mosquera. Nuestros Inmuebles en Bogotá:</h1>
</div>
<div class="row">
<div class="span12">
<h2 class="center">En Arriendo</h2>
</div>
</div>

<div class="row gallery">
<ul>
<?php

$query="SELECT * FROM coinor WHERE inmueble = '1' ";
$result=mysql_query($query) or die(mysql_error());
while ($opciones=  mysql_fetch_array($result))
{
$foto = $opciones['foto_id'];
echo "<li class='span3'>
<a href='fotos/".$foto.".jpg' class='fancybox' rel='gallery' title='COINOR: Especialistas en Finca Raíz en Bogotá'>
<img src='fotos/".$foto.".jpg' alt='Gallery' class='round' />
<img style='margin-bottom: 2%;' src='images/shadow3.png'>
</a>".$opciones['tipo']." en ".$opciones['lugar']."</br>
<form action='inmueble.php' method='POST'>
<input type='hidden' name='inmueble' value='".$opciones['foto_id']."'>
<input type='submit' value='Detalles'></form></li>
";
}

?>
</ul>
</div>

<div class="row">
<div class="span12">
<h2 class="center">En Venta</h2>
</div>
</div>

<div class="row gallery">
<ul>
<?php

$query2="SELECT * FROM coinor WHERE inmueble = '2' ";
$result2=mysql_query($query2) or die(mysql_error());
while ($opciones2=  mysql_fetch_array($result2))
{
$foto = $opciones2['foto_id'];
echo "<li class='span3'><a href='fotos/".$foto.".jpg' class='fancybox' rel='gallery' title='COINOR: Especialistas en Finca Raíz en Bogotá'><img src='fotos/".$foto.".jpg' alt='Gallery' class='round' /><img style='margin-bottom: 2%;' src='images/shadow3.png'></a>".$opciones2['tipo']." en ".$opciones2['lugar']."</br>
<form action='inmueble.php' method='POST'><input type='hidden' name='inmueble' value='".$opciones2['foto_id']."'><input type='submit' value='Detalles'></form></li>
";

}
$conectarme->cerrarconexion();
?>
</ul>
</div>	

		<div class="row">
			<hr>
			<h2 class="center">Acceda a Nuestros Inmuebles</h2>
			<table class="menu">
				<tbody>
					<tr>
						<td>
							<a href="Instrucciones de uso Persona Natural.pdf"><span>Instrucciones de uso Persona Natural</span></td></a>
						</td>
					</tr>

					<tr>
						<td>
							<a href="Formulario_Persona_Natural.pdf"><span>Formulario Persona Natural</span></td></a>
						</td>
					</tr>					

					<tr>
						<td>
							<a href="Instrucciones de uso Persona Juridica.pdf"><span>Instrucciones de uso Persona Jurídica</span></td></a>
						</td>
					</tr>

					<tr>
						<td>
							<a href="Formulario_Persona_Juridica.pdf"><span>Formulario Persona Jurídica</span></td></a>
						</td>
					</tr>					
					
					
					
				</tbody>
			</table>
		</div>
</article>

<footer>
<section class="credits">

<div class="row wrapper">

<div class="span12 center">
&copy; 2013 COINOR SAS&nbsp;&nbsp;&nbsp;<a href="contacto.html" target="_blank"><b>Contáctenos</b></a>
</div>

</div>

</section>	
</footer>

</body>
</html>
