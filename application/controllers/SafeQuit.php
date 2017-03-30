<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SafeQuit extends CI_Controller {

	public function index()
	{
		session_start();
		$this->load->view('common/safeQuit');
		session_unset();
		session_destroy();
		header('Location:../index.php');
	}
}
