<<<<<<< HEAD
<?php
/**View 
 *
 * @author      Cesar Darinel Ortiz
 */
class View {
	//var
	private $pageVars = array();
	private $template;
	/**
	 * Encodes string for use in XML
	 *
	 * @param       String $template 
	 * @return      null
	 */
	public function __construct($template)
	{
		$this->template = APP_DIR .'views/'. $template .'.php';
		
	}
	/**
	 * Encodes string for use in XML
	 *
	 * @param       String
	 * @return      string
	 */
	public function set($var, $val)
	{
		$this->pageVars[$var] = $val;
	}

	public function render()
	{
		
		$file_contents = file_get_contents($this->template);
		$file_contents = str_replace("{","<?php ",$file_contents);
		$file_contents = str_replace(">","?> ",$file_contents);
		file_put_contents($this->template,$file_contents);
		extract($this->pageVars);
		ob_start();
		require($this->template);
		
		echo ob_get_clean();
	}

    
}

?>
=======
<?php
/**View 
 *
 * @author      Cesar Darinel Ortiz
 */


defined('APP_DIR') OR exit('-_- no eres Humano ?');
class View {
	//var
	private $pageVars = array();
	private $template;
	/**
	 * Encodes string for use in XML
	 *
	 * @param       String $template 
	 * @return      null
	 */
	public function __construct($template)
	{
		$this->template = APP_DIR .'views/'. $template .'.php';
	}
	/**
	 * Encodes string for use in XML
	 *
	 * @param       String
	 * @return      string
	 */
	public function set($var, $val)
	{
		$this->pageVars[$var] = $val;
	}

	public function render()
	{
		extract($this->pageVars);

		ob_start();
		require($this->template);
		echo ob_get_clean();
	}
    
}

?>
>>>>>>> a38a8bec38f8eeed92b63dd04b983dfeff357d4c
