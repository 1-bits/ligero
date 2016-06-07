<?php

/**
 * Ligero
 * Pequeño Pero Poderoso
 *
 * @package	Ligero
 * @author	Cesar Darinel Ortiz
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://github.com/ByetsRd/ligero
 * @since	Version 0.0.1
 */


// Definimos variables de entornos y ruta
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'ligero/application/');
//Incluimos el Core

require(ROOT_DIR .'ligero/system/core/init.php');

//Arrancamos 
ligero();

?>
