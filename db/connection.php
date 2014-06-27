<?php
    $mysql_hostname = "stagingsas.db.12121567.hostedresource.com";
$mysql_user = "stagingsas";
$mysql_password = "Q1w2e3r4!";
$mysql_database = "stagingsas";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("No hay conexión con la base de datos: ". mysql_error());
      mysql_select_db($mysql_database, $bd) or die("No se pudo seleccionar la base de datos". mysql_error());
?>		