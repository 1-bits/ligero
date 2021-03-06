<?php 
/* * 
 *
 * @author      Cesar Darinel Ortiz
 */
defined('APP_DIR') OR exit('-_- no eres Humano ?');
class Ligero{
  
    public function __construct(){
        header_remove();
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        header('Content-Type: application/json');
    }

    public function run(){

        global $config;
    
        // Set our defaults
        $controller = $config['default_controller'];
        $action = 'index';
        $url = '';
    
        // Get request url and script url
        $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
        $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
    
        // Get our url path and trim the / of the left and the right
        if ($request_url != $script_url) {
            $url = trim(preg_replace('/' . str_replace('/', '\/', str_replace('app.php', '', $script_url)) . '/', '', $request_url, 1), '/');
        }
    
        // Split the url into segments
        $segments = explode('/', $url);
    
        // Do our default checks
        if (isset($segments[0]) && $segments[0] != '') {
            $porciones = explode("?", $segments[0]);
            $controller = $porciones[0];
        }
        if (isset($segments[1]) && $segments[1] != '') {
            $porciones = explode("?", $segments[1]);
            $action = $porciones[0];
        }
       
        // Get our controller file
        $path = APP_DIR . 'controllers/' . strtolower($controller) . '.php';
        if (file_exists($path)) {
            require_once($path);
        } else {
            $controller = $config['error_controller'];
            require_once(APP_DIR . 'controllers/' .strtolower($controller) . '.php');
        }
        // Check the action exists
        if (!method_exists($controller, $action)) {
            $controller = $config['error_controller'];
            require_once(APP_DIR . 'controllers/' .strtolower($controller) . '.php');
            $action = 'index';
        }
        // Create object and call method
        $obj = new $controller;
        die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
    }
}


