<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showdata_model extends CI_Model{
	
	public function __construct()
	{
		
	}
	public function showusers()
	{
		session_start();
		$this->load->model(DB_model);
// 		$query=$this->DB_model->select("select *from tb_users where user_login = '".$_SESSION[username]."';");
// 		$this->load->database();
		$this->db->select()
				->from('tb_users')
				->where(array(
						'user_login' => $_SESSION['username'],
				));
		$query = $this->db->get();
		log_message('error', preg_replace('/\s+/', ' ', 'INFO --> '.$this->input->ip_address().' --> Execute sql:'.$this->db->last_query()));
		if($row=$query->row_array())
		{
			echo $row['user_nicename'].'&nbsp&nbsp&nbsp&nbsp';
			echo $row['user_email'].'&nbsp&nbsp&nbsp&nbsp';
			echo $row['last_login_ip'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
			echo $row['last_login_time'].'&nbsp&nbsp&nbsp&nbsp';
			echo $row['create_time'].'<br>';
		}else{
			echo "null";
		}
	}
}