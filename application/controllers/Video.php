<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$data['infoNav'] = $this->load->view('common\nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common\footer', '', TRUE);
		// $this->load->model(DB_model);
		// $query=$this->DB_model->select("select *from tb_videocomment;");
		// $row=$query->result_array();
		$this->load->view('video/video',$data); 	
		
		
		// $this->load->model(Video_model);
		// $this->Video_model->comment();
	

// 		$this->load->model(video_model);
// 		$this->load->database();
// 		$query = $this->db->query("select *from tb_user;");
		
// 		foreach ($query->result() as $row)
// 		{
// 			echo $row->id;
// 			echo $row->name;
// 			echo $row->password;
// 		}
		// $this->load->model(DB_model);
		// $query=$this->DB_model->select("select *from tb_users;");
		// $this->DB_model->result($query);
		
// 		$this->load->model(DB_model);
// 		echo $this->DB_model->insert("insert into tb_users (user_login) values ('haha');");
// 		$query=$this->DB_model->insert("select *from tb_users;");
// 		echo $this->DB_model->delete("delete from tb_users where user_login = 'haha';");

// 		$this->load->model(Email_model);
// 		$this->Email_model->sendmailto('602591511@qq.com');
	}
	
	public function selectvideo($route)
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$data['infoNav'] = $this->load->view('common\nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common\footer', '', TRUE);
		$data['route'] = 'views/video/video/'.$route;
		$this->load->view('video/video',$data);
	}
	
	public function videoframe($route)
	{
		$this->load->helper('url');
		$data['route'] = 'views/video/video/'.$route;
		$this->load->view('video/videoframe',$data);
	}
	
	public function comment()
	{
		$this->load->helper('url');
		$this->load->model(Video_model);
		$this->Video_model->comment();
	}
	
	public function addComment()
	{
		$this->load->helper('url');
		$this->load->library('form_validation');
		session_start();
		$this->form_validation->set_rules('comment', 'Comment', 'required|min_length[1]|max_length[150]');
		
		if ($this->form_validation->run() == FALSE)
		{
			header('Location:../video');
		}
		else
		{
		
			if($_SESSION[username]&&$_SESSION[id])
			{
				$this->load->model(Video_model);
				$comment=set_value(comment);
				$this->Video_model->add($comment);	
				
				
				header('Location:../video');
			}else{
				$this->load->model(DB_model);
				header('Location:../video');
			}
		
		}
		
	}

	// 检测登录状态
	public function checkLogin(){
		session_start();
		if($_SESSION[username]&&$_SESSION[id]){
			echo "YES";
		}
		else{
			echo "NO";
		}
		return FALSE;
	}
}
