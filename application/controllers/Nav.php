<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav extends CI_Controller {

	public function index()
	{
		$this->load->view('common/nav');
	}
}
