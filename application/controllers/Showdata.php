<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showdata extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('admin/showdata');
		$this->load->model(Showdata_model);
		$this->Showdata_model->showusers();
	}
	
	
}