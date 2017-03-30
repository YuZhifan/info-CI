<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercise extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$data['infoNav'] = $this->load->view('common/nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common/footer', '', TRUE);
		$this->load->view('exercise/exercise',$data);
	}
	
	public function get($chapter_id)
	{
		$this->load->model(Exercise_model);
		$this->Exercise_model->get($chapter_id);
	}
	public function getRandom($amount)
	{
		$amount = is_numeric($amount)?$amount:10;
		$this->load->model(Exercise_model);
		$this->Exercise_model->getRandom($amount);
	}
}
