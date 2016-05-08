<?php
class LoginBar_model extends CI_Model {

	
	
	public function __construct()
	{
		session_start();
		// Call the CI_Model constructor
		parent::__construct();
		if($_SESSION[username]&&$_SESSION[id])
		{
			$this->load->view('common\loggedBar');
		}else{
			$this->load->view('common\loginBar');
		}
	}
}