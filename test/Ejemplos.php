<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
            require '../config/globals.php';
            require '../db/conexionsql.php';
            require '../db/db.php';
            $ini_path = parse_ini_file("../config/db.ini");
            $mysql_database=$ini_path[$DB_DATABASE];
            $mysql_hostname=$ini_path[$DB_SERVER];
            $mysql_user=$ini_path[$DB_USER];
            $mysql_password=$ini_path[$DB_PASSWORD];


//            $conectarme->conectar();
//            $query3="SELECT * FROM coinor ";
//            $result3=mysql_query($query3) or die(mysql_error());
//
//            print_r($result3);
        
        ?>
    </body>
</html>
