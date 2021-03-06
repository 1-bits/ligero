<?php 
/* * 
 *
 * @author      Cesar Darinel Ortiz
 */
defined('APP_DIR') OR exit('-_- no eres Humano ?');
class Controller {

    public function loadModel($name) {
        require(APP_DIR . 'models/' . strtolower($name) . '.php');
        $model = new $name;
        return $model;
    }

    public function loadPlugin($name) {
        require(APP_DIR . 'plugins/' . strtolower($name) . '.php');
    }

    public function redirect($loc) {
        global $config;
        //echo '<script>window.location ="' . $config['base_url'] . $loc . '"</script>';
        header('Location: ' . $config['base_url'] . $loc);
    }

    public function loadSession($name) {
        require(ROOT_DIR . 'ligero/system/core/' . strtolower($name) . '.php');
    }

    public function loadLib($name) {
        require(ROOT_DIR . 'ligero/system/Lib/' . strtolower($name) . '.php');
    }

    public function Data($var) {
        if (isset($_REQUEST[$var])) {
            return $_REQUEST[$var];
        } else {
            return null;
        }
    }
}
