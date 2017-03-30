<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginBar_model extends CI_Model {

	
	
	public function __construct()
	{
		session_start();
		// Call the CI_Model constructor
		parent::__construct();
		if($_SESSION[username]&&$_SESSION[id])
		{
			$this->load->view('common/loggedBar');
		}else{
			$this->load->view('common/loginBar');
		}
	}
}