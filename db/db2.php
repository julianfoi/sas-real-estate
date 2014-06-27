<?php
//$link = mysql_connect("localhost", "root", "")
//or die("No hay conexión con la base de datos: " . mysql_error());
//mysql_select_db("coinor", $link) 
//or die (mysql_error());

/// This is for Coinor.co hosting
//$link = mysql_connect("68.178.216.112", "coinor", "WALTMAN6p#")
//or die("No hay conexión con la base de datos: " . mysql_error());
//mysql_select_db("coinor", $link) 
//or die (mysql_error());

///This is for Coinor.com.co hosting
$db_array = parse_ini_file("db.ini");
$link = mysql_connect("stagingsas.db.12121567.hostedresource.com", "stagingsas", "Q1w2e3r4!")
or die("No hay conexión con la base de datos: " . mysql_error());
mysql_select_db("stagingsas", $link) 
or die (mysql_error());

?>
