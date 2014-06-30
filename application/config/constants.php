<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/*
|--------------------------------------------------------------------------
| DB Model Constants
|--------------------------------------------------------------------------
|
| These modes are used when querying database
|
*/

define('EN_ARRIENDO','1');
define('EN_VENTA','2');

define('ERROR_ADDING_UNIT','-1');
define('SUCCESS','0');

define('TMP_MULTIMEDIA_FOLDER','/uploads/');
define('PICTURE_FOLDER','/fotos/');

define('TMP_MULTIMEDIA_PATH',FCPATH . TMP_MULTIMEDIA_FOLDER);
define('PICTURE_PATH',FCPATH . PICTURE_FOLDER);
define('VALID_PICTURE_FORMATS','gif|jpg|png');

define('JPGPICTUREFORMATS','jpg');
define('PNGPICTUREFORMATS','png');
define('GIFPICTUREFORMATS','gif');


define('IMAGE_TYPE_JPG','.jpg');
define('RESPONSE_CODE','RESPONSE_CODE');



/* End of file constants.php */
/* Location: ./application/config/constants.php */