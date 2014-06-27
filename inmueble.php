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
<h1></br>COINOR: Especialistas en Finca Raíz en Bogotá y Mosquera.</h1>
</div>
<div class="row">
<div class="span12">

<?php
require 'conexionsql.php';
require 'db.php';
$conectarme->conectar();
$inmueble = $_POST['inmueble'];
$query3="SELECT * FROM coinor WHERE foto_id = '$inmueble' ";
$result3=mysql_query($query3) or die(mysql_error());
$opciones3=  mysql_fetch_array($result3);
if ($opciones3['inmueble']==	1	){$car='Arriendo';}
if ($opciones3['inmueble']==	2	){$car='Venta';}
echo "
<div class='row'>
<div class='span8'  >
<hr>
<h2 class='center'>Inmueble en ".$car."</h2>
<table>
<tbody>
<tr>
<td>Lugar:</td>
<td>".$opciones3['lugar']."</td>
</tr>

<tr>
<td>Zona:</td>
<td>".$opciones3['zona']."</td>
</tr>

<tr>
<td>Tipo:</td>
<td>".$opciones3['tipo']."</td>
</tr>

<tr>
<td>Edad:</td>
<td>".$opciones3['edad']."</td>
</tr>

<tr>
<td>Área:</td>
<td>".$opciones3['area']."</td>
</tr>

<tr>
<td>Descripción:</td>
<td>".$opciones3['descripcion']."</td>
</tr>

<tr>
<td>Valor:</td>
<td>".$opciones3['valor']."</td>
</tr>

</tbody>
</table>
</div>
</div>
";
?>
</div>
</div>

<div class="row gallery">
<ul>
<?php

$inmueble = $_POST['inmueble'];
$query="SELECT * FROM fotos WHERE inmueble = '$inmueble' ";
$result=mysql_query($query) or die(mysql_error());
while ($opciones=  mysql_fetch_array($result))
{
$foto = $opciones['foto_id'];


echo "<li class='span3'>
<a href='fotosinmuebles/".$foto.".jpg' class='fancybox' rel='gallery' title='COINOR: Especialistas en Finca Raíz en Bogotá'>
<img src='fotosinmuebles/".$foto.".jpg' alt='Gallery' class='round' />
<img style='margin-bottom: 2%;' src='images/shadow3.png'></a>".$opciones['descripcion']."</br></li>
";
}

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
		
		
		<div class="row">
			<hr>
			<h2 class="center">Recomendaciones para diligenciar la solicitud de estudio de arrendamiento <h2>
<p>Para diligenciar el formulario, ubíquese en cada uno de los campos y digite la información requerida<br/>
Adjunte fotocopias legibles de los documentos requeridos. Recuerde que NO devolvemos ningún documento anexo a la solicitud. <br/>
•	Cancele el valor del estudio de acuerdo al monto del canon y a la tabla de valores de estudio, consignando en la Cuenta de Ahorros de Davivienda No. 00650018589-4 a nombre de Investigaciones y Cobranzas El Libertador S.A., en cualquier oficina DAVIVIENDA (sujetos a cambios sin previo aviso).<br/> 
•	Se hace necesario una copia del formulario diligenciado, sin importar que sea persona Natural y/o Jurídica.<br/>
•	El formulario debe entregarse con la firma y huella original.<br/>
•	Radique su solicitud en cualquiera de nuestros Puntos de Servicio y 23 horas después, podrá consultar su resultado por medio de nuestra pagina web.<br/>
Le recomendamos NO acuda a fiadores de profesión, pues hacerlo automáticamente anula su solicitud.<br/>
</p>
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
