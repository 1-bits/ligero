<?php
/**
 * Ligero
 * Pequeño Pero Poderoso
 *
 * @package	Ligero
 * @author	Cesar Darinel Ortiz
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://github.com/1-bits/ligero
 * @since	Version 0.1.2
 */
define('ROOT_DIR',realpath(dirname(__FILE__)) .'/');
define('APP_DIR',ROOT_DIR.'application/');
require_once(ROOT_DIR.'ligero/core/ligero.php');
require_once('config.php');
session_start();
global $config;
define('BASE_URL', $config['base_url']);
define('STATIC_URL', $config['base_url'].'application/views/static/');
$run=new ligero();
$run->ligero_run();
