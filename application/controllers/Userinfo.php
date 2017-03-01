<?php
class Userinfo extends CI_Controller {

	public function index()
	{
		session_start();
		$username = $_SESSION['username'];
		session_abort();
		$this->load->database();
		$this->db->from('tb_users')
				->select('user_email,avatar,sex')
				->where(array('user_login'=>$username))
				->limit(1);
		$result = $this->db->get()->result_array();

		$this->load->helper('url');
		$this->load->view('admin\userinfo',$result[0]);
		$this->load->model(Userinfo_model);
		
	}
}