<?php
class Userinfo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('admin\userinfo');
		$this->load->model(Userinfo_model);
	}
}