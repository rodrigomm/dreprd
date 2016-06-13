<?php 
$config['titulo'] = 'DREP | Direción Regional de Educación Puno';
$config['url'] = 'http://localhost/dreprd/';
$config['path'] = 'http://localhost/dreprd/files';
$config['path_files'] = 'http://localhost/dreprd/files/';
$config['base'] = '/';
$config['css'] = $config['url'].'/css/';
$config['imagen'] = $config['url'].'/images/';
$config['js'] = $config['url'].'/Js/';
$config['files'] = 'Files/';
$config['media'] =  $config['url'].'/swf/';
$config['fix'] = $config['url'].'/fix/';

$config['pag_search'] = 10;//Numero de registros a mostrar del paginador de la busqueda
 
/*CONFIG DB **/
define('RUTA_ARCHIVOS', 'http://localhost/dreprd/files/');   

/*CONFIG DB **/
	$bd['host'] = 'localhost';
	$bd['user'] = 'root';
	$bd['pass'] = '';
	$bd['database'] = 'test';
	$config['prefijo'] = 'files_';

/*** FUNCIONES ***/ 
function info($key)
{
	global $config;
	if (isset($config[$key])) 
	 	echo $config[$key];
	 else
		echo 'la clave no existe';
	
}

function get_info($key)
{
	global $config;
	if (isset($config[$key])) 
	 	return $config[$key];
	 else
		return 'la clave no existe';
}
 

?>