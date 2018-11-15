<?php
/**v1 
 *
 * @author      Cesar Darinel Ortiz
 */
class V1 extends Controller {
	
	function index(){
		$array = array(
			"foo" => "bar",
			"bar" => "foo",
		);
		http_response_code(200);
		echo json_encode( $array );
	}

	function prueba(){
		$array = array(
			"prueba" => "test",
			"test" => "prueba",
		);
		setcookie("cookie", strtoupper('cesar@cesar.com'), time()+ 3600000, '/');
        setcookie("host", 'localhost', time()+ 3600000, '/');
        setcookie("marbete_coopopular", session_id(),time()+ 3600000, '/');
		http_response_code(200);
		echo json_encode( $array );
	}
    
}

?>
