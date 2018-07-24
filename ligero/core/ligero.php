<?php defined('APP_DIR') OR exit('-_- no eres Humano ?');

require_once(ROOT_DIR .'ligero/core/model.php');
require_once(ROOT_DIR .'ligero/core/view.php');
require_once(ROOT_DIR .'ligero/core/controller.php');

class ligero{
    private $path;
    private $controller;
    private $action;
    private $global_var;
    private $segments;

    function __construct(){
      global $config;
      $this->global_var=& $config;
      $this->controller = $config['default_controller'];
      $this->action = 'index';
    }
    /**
     *
     */
    public function ligero_run(){
      $this->get_request();
      $this->get_class();
      $this->go_controler_method();
    }
    /**
     *
     */
    function get_request(){
      $url = '';
      // Get request url and script url
      $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
      $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
      // Get our url path and trim the / of the left and the right
      if ($request_url != $script_url) {
          $url = trim(preg_replace('/' . str_replace('/', '\/', str_replace('index.php', '', $script_url)) . '/', '', $request_url, 1), '/');
      }
      // Split the url into segments
      $this->segments = explode('/', $url);
    }
    /**
     *
     */
    private function get_class(){
      // Do our default checks
      if (isset($this->segments[0]) && $this->segments[0] != '') {
          $porciones = explode("?", $segments[0]);
          $this->controller = $porciones[0];
      }
      if (isset($segments[1]) && $segments[1] != '') {
          $porciones = explode("?", $segments[1]);
          $this->action = $porciones[0];
      }
      // Get our controller file
      $this->path = APP_DIR . 'controllers/' . strtolower($this->controller ) . '.php';
    }


    /**
     *
     */
    private function go_controler_method(){
      if (file_exists($this->path)) {
          require_once($this->path);
      } else {
          $this->controller = $this->global_var['error_controller'];
          require_once(APP_DIR . 'controllers/' .strtolower($this->controller ) . '.php');
      }
      // Check the action exists
      if (!method_exists($this->controller, $this->action)) {
          $this->controller = $this->global_var['error_controller'];
          require_once(APP_DIR . 'controllers/' .strtolower($this->controller) . '.php');
          $action = 'index';
      }
      // Create object and call method
      $obj = new $this->controller;
      die(call_user_func_array(array($obj, $this->action), array_slice($this->segments,2)));
    }
}
