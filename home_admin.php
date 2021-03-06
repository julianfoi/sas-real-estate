<?php
	require_once('./auth/auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>COINOR - Administracion de Inmuebles </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="HTML Theme">
	<meta name="author" content="COINOR">
	
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

	<link href="/css/grid.css" rel="stylesheet" type="text/css">
	<link href="/css/base.css" rel="stylesheet" type="text/css">
	<link href="/css/adv.css" rel="stylesheet" type="text/css">
	<link href="/css/fwslider.css" rel="stylesheet" type="text/css">
	<link href="/css/timepicker.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/css/jquery-ui.css" />
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC' rel='stylesheet' type='text/css'>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery-ui-timepicker-addon.js"></script>
    <script src="/js/css3-mediaqueries.js"></script>
    <script src="/js/fwslider.js"></script>
	<script src="/js/settings-inner.js"></script>
	<script src="/js/jquery.form.js"></script>
	


</head>

<body class="inner">

	<?php 
      //  if (!isset($_SESSION['usuario'])) {echo "<script> window.location.replace('login.html') </script>"; exit();} else { echo"<header>";} 
           echo"<header>";
        ?> 
	
		<div class="nav-bar">
			<div class="nav-inside">
			</div>
		</div>
		
		<div class="wrapper">
		
<!-- ******** LOGO START ******** -->
<div class="logo">
    <img src="/images/logo.png" />



</div>
<!-- ******** LOGO END ******** -->

<!-- ******** NAVIGATION START ******** -->
<nav class="main">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="nosotros.html">Nosotros</a></li>
<li><a href="inmuebles.php">Inmuebles</a></li>
<li><a href="contacto.html">Contacto</a></li>
<li><a href="/auth/home_admin.php">Admin</a></li>
<li><a href="/auth/login_form.php">Cerrar Session</a></li>
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
	
		<form name="contactform" method="post" action="subirfotos.php" >
		
			<div class="row">
				<div class="span12 center"></br>
					<input type="submit" value="Subir Fotos">
				</div>
			</div>
		</form>
		
		<form name="contactform" method="post" action="borrarfotos.php" >
		
			<div class="row">
				<div class="span12 center"></br>
					<input type="submit" value="Borrar Fotos">
				</div>
			</div>
		</form>
		

		<form name="contactform" method="post" action="crearinmuebles.php" >
		
			<div class="row">
				<div class="span12 center"></br>
					<input type="submit" value="Crear Inmuebles">
				</div>
			</div>
		</form>
		
		<form name="contactform" method="post" action="borrarinmuebles.php" >
		
			<div class="row">
				<div class="span12 center"></br>
					<input type="submit" value="&nbsp;Borrar Inmuebles&nbsp;">
				</div>
			</div>
		</form>
        
        
 <!-- 	 ******** RESERVATION START ******** -->
	
	</article>
	
	
</body>
</html>
