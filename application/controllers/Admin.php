<?php
class Admin extends CI_Controller {

	public function index()
	{
		session_start();
		if($_SESSION[username]&&$_SESSION[id])
		{
			$this->load->helper('url');
			$this->load->model(LoginBar_model);
			$this->load->view('admin/admin');
		}else{
			header('Location:../index.php');
		}
	}
}