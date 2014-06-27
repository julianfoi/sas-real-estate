<?php session_start();?>
<!DOCTYPE html>
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
<hr>
</div>
</div>

<!-- ******** BLOG START ******** -->
<div class="span12">
<h1></br>Administrador de la Página Web</h1>
</div>
<div class="row">
<div class="span12">
<h2 class="center">Borrar Fotos</h2>
</div>
</div>

<div class="row gallery">
<ul>
<?php
require './db/connection.php';
$conectarme->conectar();
$inmueble = $_POST['inmueble'];
$query="SELECT * FROM fotos WHERE inmueble = '$inmueble' ";
$result=mysql_query($query) or die(mysql_error());
while ($opciones=  mysql_fetch_array($result))
{
$foto = $opciones['foto_id'];


echo "<li class='span3'><form action='borrarfot.php' method='POST'>
<input type='hidden' name='foto' value='".$opciones['foto_id']."'>
<input type='submit' value='Borrar Foto'></form></br>
<a href='fotosinmuebles/".$foto.".jpg' class='fancybox' rel='gallery' title='COINOR: Especialistas en Finca Raíz en Bogotá'>
<img src='fotosinmuebles/".$foto.".jpg' alt='Gallery' class='round' />
<img style='margin-bottom: 2%;' src='images/shadow3.png'></a>".$opciones['descripcion']."</br></li>
";
}

?>
</ul>
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
