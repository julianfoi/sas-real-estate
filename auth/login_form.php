<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<title>Coinor SAS - Autenticacion</title>
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
	<link rel="stylesheet" href="css/jquery-ui.css" />
	
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

	<header>
	
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
<li><a href="/index.php">Inicio</a></li>
<li><a href="/nosotros.html">Nosotros</a></li>
<li><a href="/inmuebles.php">Inmuebles</a></li>
<li><a href="/contacto.html">Contacto</a></li><li><a href="admin.php">Admin</a></li>
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
				<h2 class="center">Iniciar Sesi�n</h2>
				<div class="message">
					<div id="alert"></div>
				</div>
			</div>
		</div>
		
<form action='./login_exec.php' method='POST'  >
<div class="row">
<div class="span6">
<table>
<tbody>



<tr>
<td>Usuario:</td>
<td><input type="text"  name="usuario"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password"  name="password"></td>
</tr>


<tr>
<td><input type="submit" value="Enviar"></td>
<td>
 <!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
</td>
</tr>

</tbody>
</table>
</div>
</div>



	<!-- ******** RESERVATION START ******** -->
	
	</article>
	
	
</body>
</html>
