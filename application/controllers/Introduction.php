<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Introduction extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$data['infoNav'] = $this->load->view('common/nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common/footer', '', TRUE);
		$this->load->view('introduction/introduction',$data);
	}
}
