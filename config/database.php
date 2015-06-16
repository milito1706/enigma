<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'conexion_entidad';
$active_record = TRUE;

$db['conexion_entidad']['hostname'] = 'localhost';
$db['conexion_entidad']['username'] = 'root';
$db['conexion_entidad']['password'] = 'root';
$db['conexion_entidad']['database'] = 'pld_credifuturo';
$db['conexion_entidad']['dbdriver'] = 'mysqli';
$db['conexion_entidad']['dbprefix'] = '';
$db['conexion_entidad']['pconnect'] = FALSE;
$db['conexion_entidad']['db_debug'] = TRUE;
$db['conexion_entidad']['cache_on'] = FALSE;
$db['conexion_entidad']['cachedir'] = '';
$db['conexion_entidad']['char_set'] = 'utf8';
$db['conexion_entidad']['dbcollat'] = 'utf8_general_ci';
$db['conexion_entidad']['swap_pre'] = '';
$db['conexion_entidad']['autoinit'] = TRUE;
$db['conexion_entidad']['stricton'] = FALSE;

//conexion de catalogo de direcciones de la sepomex
$db['conexion_localidad']['hostname'] = 'localhost';
$db['conexion_localidad']['username'] = 'root';
$db['conexion_localidad']['password'] = 'root';
$db['conexion_localidad']['database'] = 'propld_access';
$db['conexion_localidad']['dbdriver'] = 'mysqli';
$db['conexion_localidad']['dbprefix'] = '';
$db['conexion_localidad']['pconnect'] = FALSE;
$db['conexion_localidad']['db_debug'] = TRUE;
$db['conexion_localidad']['cache_on'] = FALSE;
$db['conexion_localidad']['cachedir'] = '';
$db['conexion_localidad']['char_set'] = 'utf8';
$db['conexion_localidad']['dbcollat'] = 'utf8_general_ci';
$db['conexion_localidad']['swap_pre'] = '';
$db['conexion_localidad']['autoinit'] = FALSE;
$db['conexion_localidad']['stricton'] = FALSE;




/* End of file database.php */
/* Location: ./application/config/database.php */
?>