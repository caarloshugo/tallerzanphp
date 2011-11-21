<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Aldeanos_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("aldeanos");
				
		$this->Templates = $this->core("Templates");

		$this->Templates->theme(_webTheme);
	}
	
	public function index() {		
		print "Welcome #ADMX";
	}
	
	public function results() {
		$vars["view"]	 = $this->view("results", TRUE);
		$this->template("content", $vars);
	}
	
	public function prueba($param1, $param2) {
		print "Funciona el nuevo sistema de rutas: $param1, $param2";
	}

	public function show($message) {
		$vars["message"] = $message;
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->template("content", $vars);
	}

}
