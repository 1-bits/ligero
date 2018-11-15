<?php
/**Error 
 *
 * @author      Cesar Darinel Ortiz
 */
class Errores extends Controller {
	
	function index()
	{
		$this->error404();
	}
	/**
	 * Encodes string for use in XML
	 *
	 * @param       null
	 * @return      string
	 */
	function error404()
	{
		http_response_code(400);
		http_re
	}
}

?>
