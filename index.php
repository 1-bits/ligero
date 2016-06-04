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
<<<<<<< HEAD
=======
session_start(); //Inicio de Seccion 
>>>>>>> a38a8bec38f8eeed92b63dd04b983dfeff357d4c
// Definimos variables de entornos y ruta
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'ligero/application/');
//Incluimos el Core
<<<<<<< HEAD
require(ROOT_DIR .'ligero/system/core/init.php');
=======
require(ROOT_DIR .'ligero/system/config.php');
require(ROOT_DIR .'ligero/system/core/model.php');
require(ROOT_DIR .'ligero/system/core/view.php');
require(ROOT_DIR .'ligero/system/core/controller.php');
require(ROOT_DIR .'ligero/system/core/ligero.php');
global $config;
// Define base URL
define('BASE_URL', $config['base_url']);
//URL para nuestro template
define('STATIC_URL', $config['base_url'].'ligero/application/views/static/');


>>>>>>> a38a8bec38f8eeed92b63dd04b983dfeff357d4c
//Arrancamos 
ligero();

?>
