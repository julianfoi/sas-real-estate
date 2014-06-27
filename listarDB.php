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
            require 'db2.php';
            $result = mysql_query("SHOW COLUMNS FROM fotos");
            if (!$result) {
                echo 'Could not run query: ' . mysql_error();
                exit;
            }
            if (mysql_num_rows($result) > 0) {
                while ($row = mysql_fetch_assoc($result)) {
                    print_r($row);
                }
            }
        ?>
    </body>
</html>
