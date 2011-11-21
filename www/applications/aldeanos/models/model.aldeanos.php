<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Aldeanos_Model extends ZP_Model {
	
	private $route;
	private $table;
	private $primaryKey;
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
		
		$this->table = "aldeanos";
	}
	
	public function find($ID) {
		$this->Db->table($this->table);
		$data = $this->Db->find($ID);
		
		#return $data;
		return ($data !== FALSE) ? $data[0] : FALSE;
	}
	
	public function validation() {
		if(is_null(POST("name"))) {
			return getAlert("You need to write a name");
		} elseif(is_null(POST("email"))) {
			return getAlert("You need to write a email");
		} elseif(is_null(POST("code"))) {
			return getAlert("You need to write a code");
		}
		
		return FALSE;
	}
	
	public function save() {
		$validation = $this->validation();
		
		if($validation) {
			return $validation;
		}
		
		$values = array(
			"Name"    => POST("name"),
			"Email"	  => POST("email"),
			"Twitter" => POST("twitter"),
			"Code"    => POST("code")
		);
		
		$result =  $this->Db->insert($this->table, $values);
		
		if($result) {
			return getAlert('The "Aldeano" has been saved correctly', "success");
		} else {
			return getAlert("Insert error");
		}
	}
	
	public function edit($ID) { 
		$validation = $this->validation();
		
		if($validation) {
			return $validation;
		}
		
		$values = array(
			"Name"    => POST("name"),
			"Email"	  => POST("email"),
			"Twitter" => POST("twitter"),
			"Code"    => POST("code")
		);
		
		$result =  $this->Db->update($this->table, $values, "ID_Aldeano = " . $ID);
		
		if($result) {
			return getAlert('The "Aldeano" has been edited correctly', "success");
		} else {
			return getAlert("Edit error");
		}
	}
}
