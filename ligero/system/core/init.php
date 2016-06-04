<?php
//Inicio de Seccion 
session_start(); 
//configuraciones Core
require(ROOT_DIR .'ligero/system/config.php');
require(ROOT_DIR .'ligero/system/core/model.php');
require(ROOT_DIR .'ligero/system/core/view.php');
require(ROOT_DIR .'ligero/system/core/controller.php');
require(ROOT_DIR .'ligero/system/core/ligero.php');
require(ROOT_DIR .'ligero/system/core/parser.php');
//
global $config;
// Define base URL
define('BASE_URL', $config['base_url']);
//URL para nuestro template
define('STATIC_URL', $config['base_url'].'ligero/ligero/application/views/static/');

?>