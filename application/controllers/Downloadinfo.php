<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloadinfo extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		echo '<pre>';
	}
	
	public function index(){
		$this->load->database();
		$this->db->from('tb_resource')
		->select('name,src,cover,type');
		$result = $this->db->get()->result_array();
		log_message('error', preg_replace('/\s+/', ' ', 'INFO --> '.$this->input->ip_address().' --> Execute sql:'.$this->db->last_query()));
		$this->load->helper('url');
// 		var_dump($result);exit;
		$this->load->view('admin/downloadinfo',array('result' => $result));
	}
}