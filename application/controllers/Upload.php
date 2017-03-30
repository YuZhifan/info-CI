<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function index()
	{
			session_start();
			$username = $_SESSION['username'];
			session_abort();
			$file_name = time();
        	$bool = move_uploaded_file($_FILES["file"]["tmp_name"],FCPATH."views/upload/avatar/".$file_name.".tmp");
        	if($bool && $_FILES["file"]["size"] < 200*1024){
				$this->load->database();
				$this->db->update('tb_users',
						array('avatar'=>'views/upload/avatar/'.$file_name.'.tmp'),
						array('user_login'=>$username)
						);
				log_message('error', preg_replace('/\s+/', ' ', 'INFO --> '.$this->input->ip_address().' --> Execute sql:'.$this->db->last_query()));
        		echo FCPATH."views/upload/avatar/".$file_name.".tmp";
        	}else{
        		echo 'error';
        	}
        	header('Location:userinfo');
	}
	
	
}
