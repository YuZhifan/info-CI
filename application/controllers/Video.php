<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$this->load->view('common\nav');
		// $this->load->model(DB_model);
		// $query=$this->DB_model->select("select *from tb_videocomment;");
		// $row=$query->result_array();
		$this->load->view('video/video'); 	
		
		
		// $this->load->model(Video_model);
		// $this->Video_model->comment();
		
		$this->load->view('common\footer');

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
	
	public function comment()
	{
		$this->load->helper('url');
		$this->load->model(Video_model);
		$this->Video_model->comment();
	}
}
