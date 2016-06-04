<?php


defined('APP_DIR') OR exit('-_- no eres Humano ?');


class Controller {
<<<<<<< HEAD
	
	public function loadModel($name)
	{
		require(APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}
	
	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}
	
	public function loadLibs($name)
	{
		require(ROOT_DIR .'ligero/system/Libs/'. strtolower($name) .'.php');
	}
	
	public function redirect($loc)
	{
		global $config;
		
		header('Location: '. $config['base_url'] . $loc);
	}
    
=======

    public function loadModel($name) {
        require(APP_DIR . 'models/' . strtolower($name) . '.php');
        $model = new $name;
        return $model;
    }

    public function loadView($name) {
        $view = new View($name);
        return $view;
    }

    public function loadPlugin($name) {
        require(APP_DIR . 'plugins/' . strtolower($name) . '.php');
    }

    public function redirect($loc) {
        global $config;
        header('Location: ' . $config['base_url'] . $loc);
    }

    public function loadSession($name) {
        require(ROOT_DIR . 'ligero/system/core/' . strtolower($name) . '.php');

    }
    public function loadLib($name) {
        require(ROOT_DIR . 'ligero/system/Lib/' . strtolower($name) . '.php');

    }

>>>>>>> a38a8bec38f8eeed92b63dd04b983dfeff357d4c
}

?>
