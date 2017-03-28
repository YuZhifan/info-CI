<?php
class Response_model extends CI_Model {



	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function success($array){
		
		$responseArray = array(
				'status' => 10000,
				'results' => $array,
		);
// 		echo '<pre>';
		header('Content-type: application/json');
		echo(json_encode($responseArray));
// 		exit();
	}
	
	public function fail($array=null){
	
		$responseArray = array(
				'status' => 10001,
				'results' => $array,
		);
		// 		echo '<pre>';
		header('Content-type: application/json');
		echo(json_encode($responseArray));
		// 		exit();
	}


}