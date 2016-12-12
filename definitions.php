<?php

class manifestDeclaration{
	
	public $db;
	
	function initSQL(){
		$this->db = new SQLite3("world_sql_content_9ff3313adc5069b3ec1685db923e5217.content");
	}
	
	function getDefinition($type){
		$this->initSQL();
		$results = $this->db->query("SELECT * FROM ".$type);
		while ($row = $results->fetchArray()) {
			$definition_json[] = json_decode($row['json'], true);
		}
		return $definition_json;
	}
}

?>