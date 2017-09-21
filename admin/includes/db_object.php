<?php

class Db_object{



	public static function find_all(){
		return static::find_user_query("SELECT * FROM ". static::$db_table );
	}

	public static function find_by_id($id){

		$the_result_array = static::find_user_query("SELECT * FROM ". static::$db_table ." WHERE id=$id LIMIT 1");

		return !empty($the_result_array) ? array_shift($the_result_array) : false;

		
	}

	public static function find_user_query($sql){
		global $database;
		$result_set = $database->query($sql);

		$the_object_array = array();
		while($row = mysqli_fetch_array($result_set)){
			$the_object_array[] = static::instantiation($row);
		}
		return $the_object_array;
	}


	public static function instantiation($the_record){
		$called_class = get_called_class();
		$the_object = new $called_class;

        foreach($the_record as $the_attribute => $value){
        	if($the_object->has_the_attribute($the_attribute)){
        		$the_object->$the_attribute = $value;
        	}
        }


        return $the_object;
	}


	private function has_the_attribute($the_attribute){
		$object_properties = get_object_vars($this);

		return array_key_exists($the_attribute, $object_properties);
	}



	protected function properties(){
		//return get_object_vars($this);
		global $database;
		$properties = array();
		foreach(static::$db_table_fields as $db_field){
			if(property_exists($this, $db_field)){
				$properties[$db_field] = $database->escape_string($this->$db_field);
			}
		}

		return $properties;
	}




	public function create(){
		global $database;

		$properties = $this->properties();

		$sql = "INSERT INTO " . static::$db_table . " (". implode(", ", array_keys($properties)) .") VALUES('". implode("','", array_values($properties)) ."')";

		if($database->query($sql)){
			$this->id = $database->the_insert_id();
			return true;

		} else{
			return false;
		}
	}


	public function update(){
		global $database;

		$properties = $this->properties();
		$proper_pairs = array();
		foreach ($properties as $key => $value) {
			$proper_pairs[] = "{$key}='{$value}'";
		}
		$id 		= $database->escape_string($this->id);

		$sql = "UPDATE " . static::$db_table . " SET ". implode(", ", $proper_pairs) ." WHERE id='$id'";

		$database->query($sql);

		return ($database->conn->affected_rows == 1 ? true : false);
	}


	public function delete(){
		global $database;
		$id 		= $database->escape_string($this->id);

		$sql = "DELETE FROM " . static::$db_table . " WHERE id='$id' LIMIT 1";
		$database->query($sql);

		return ($database->conn->affected_rows == 1 ? true : false);
	}


	public function save(){
		return isset($this->id) ? $this->update() : $this->create();
	}




}