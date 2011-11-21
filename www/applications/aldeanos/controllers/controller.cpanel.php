<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Cpanel_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("aldeanos");
				
		$this->Aldeanos_Model = $this->model("Aldeanos_Model");
		$this->Templates      = $this->core("Templates");

		$this->Templates->theme(_webTheme);
	}
	
	public function index() {
		$vars["data"] = $this->Aldeanos_Model->all();
		
		if(!$vars["data"]) {
			redirect("aldeanos/cpanel/add");
		}
		
		$vars["legend"] = __("Aldeanos");
		$vars["view"]   = $this->view("aldeanos", TRUE);
		$this->template("content", $vars);
	}
	
	public function add() {
		if(POST("save")) {
			$vars["alert"] = $this->Aldeanos_Model->save();
		}
		
		$vars["legend"] = __("Register");
		$vars["view"]   = $this->view("add", TRUE);
		$this->template("content", $vars);
	}
	
	public function edit($ID = 0) {
		if(POST("edit")) {
			$vars["alert"] = $this->Aldeanos_Model->edit($ID);
		}
		
		$vars["data"]   = $this->Aldeanos_Model->find($ID);
		
		if(!$vars["data"]) {
			redirect("aldeanos/cpanel");
		}
		
		$vars["legend"] = __("Edit");
		$vars["view"]   = $this->view("add", TRUE);
		$this->template("content", $vars);
	}
}
