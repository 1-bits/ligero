<?php

class Example_model extends Model {
	
	public function getSomething($id){
		$id = $this->escapeString($id);
		$result = $this->query('SELECT * FROM prueba WHERE id="'. $id .'"');
		return $result;
	}
    public function prueba($id){       
		return "prueba";
	}

}

?>
