<?php
class Response_model extends CI_Model {



	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function success($array){
		
		$responseArray = array(
				'Status' => 10000,
				'results' => $array,
		);
		echo '<pre>';
		var_dump($responseArray);
		exit();
	}


}