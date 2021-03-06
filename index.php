<?php
/**
 * Ligero
 * Pequeño Pero Poderoso
 *
 * @package	Ligero
 * @author	Cesar Darinel Ortiz
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://github.com/1-bits/ligero
 * @since	Version 0.0.3
 */
session_start(); //Inicio de Seccion 
// Definimos variables de entornos y ruta
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'ligero/application/');

//Incluimos el Core
require('config.php');
require(ROOT_DIR .'ligero/system/core/model.php');
require(ROOT_DIR .'ligero/system/core/controller.php');
require(ROOT_DIR .'ligero/system/core/ligero.php');
global $config;
// Define base URL
define('BASE_URL', $config['base_url']);
//URL para nuestro template
define('STATIC_URL', $config['base_url'].'ligero/application/views/static/');
//Arrancamos 
$Servicio = new ligero();
$Servicio->run();
