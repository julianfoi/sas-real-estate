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
        <!--
            $DBUSER="coinor";
            $DBPASSWD="WALTMAN6p#";
            $DATABASE="coinor";
            $HOST="68.178.216.112"
                  
            $filename = "backup-" . date("d-m-Y") . ".sql.gz";
            $mime = "application/x-gzip";

            header( "Content-Type: " . $mime );
            header( 'Content-Disposition: attachment; filename="' . $filename . '"' );

            $cmd = "mysqldump -u $DBUSER --password=$DBPASSWD --host=$HOST $DATABASE | gzip --best";   

            passthru( $cmd );

exit(0);
        -->
        <?php
      
//MySQL connection parameters
$dbhost = '68.178.216.112';
$dbuser = 'coinor';
$dbpass = 'WALTMAN6p#';
$dbname = 'coinor';

//Connects to mysql server
//$connessione = @mysql_connect($dbhost,$dbuser,$dbpsw);

//Set encoding
//mysql_query("SET CHARSET utf8");
//mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

//Includes class
//require_once('FKMySQLDump.php');


//Creates a new instance of FKMySQLDump: it exports without compress and base-16 file
//$dumper = new FKMySQLDump($dbname,'fk_dump.sql',false,false);

//$params = array(
    //'skip_structure' => TRUE,
    //'skip_data' => TRUE,
//);

//Make dump
//$dumper->doFKDump($params);

    $toDay = date('d-m-Y');

   // passthru("mysqldump --user=$dbuser --password='$dbpass' --host=$dbhost $dbname ");

//$conn = mysql_connect($dbhost, $dbuser, $dbpass);
//if(! $conn )
//{
  //die('Could not connect: ' . mysql_error());
//}
    
//$backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';
//$command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ".
           "test_db | gzip > /home/content/86/10982786/html/coinor/$backup_file";

//system($command);

$table_name = "coinor";
$backup_file  = '/home/content/86/10982786/html/coinor/coinor_table.sql';
//$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
$sql = "SELECT * FROM $table_name";
//mysql_select_db('coinor');
//$retval = mysql_query( $sql );
//if(! $retval )
//{
  //die('Could not take data backup: ' . mysql_error());
//}
//echo "Backedup  data successfully\n";
//mysql_close($conn);
           
 //   Another option to get data
//$filename = '/home/content/86/10982786/html/coinor/version.txt'; 

//mysql_connect( 'localhost', $user, $pass ); 
//$SQL = mysql_query( $sql); 
//$result = mysql_fetch_assoc( $SQL ); 

//$version = $result['version']; 
//$version = $result; 

//if( ! $handle = fopen( $backup_file, 'a' ) ) 
//{ 
    //echo "Cannot open file ( $backup_file )"; 
  //  exit; 
//} 
//if( fwrite( $handle, $version ."\r" ) === FALSE )  
//{ 
    //echo "Cannot write to file ( $filename )"; 
  //  exit; 
//} 

//echo "Success, wrote ( $version ) to file ( $filename )";   
//fclose( $handle );             
           
// ANOTHERRRRE WAAYYYYAYAYAYAYAYA

//$fp = fopen('php://output', 'w');
//if ($fp && $SQL) {
  //  header('Content-Type: text/csv');
  //  header('Content-Disposition: attachment; filename="export.csv"');
  //  while ($row = $SQL->fetch_array(MYSQLI_NUM)) {
    //    fputcsv($fp, array_values($row));
    //}
    //die;
//}
backup_tables($dbhost,$dbuser,$dbpass,'coinor');


/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
	
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($name,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//save file
	$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}

?>
    </body>
</html>
