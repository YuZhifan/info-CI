<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		session_start();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model(DB_model);
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]|callback_password_check',array('required' => 'You must provide a %s.'));
		
		if ($this->form_validation->run() == FALSE)
        {
        	
            $this->load->view('login/login');
        }
        else
        {
			$this->load->model(Time_model);
			$_SESSION[last_login_time] = $this->Time_model->getdata();
			$_SESSION[username]=$this->input->post(username);
			header('Location:../index.php');
			// $this->DB_model->update("");
			
            
        }
	}
	
// 	public function password_check($str) 
//     {
//     	$this->load->library('encryption');
// 		$query=$this->DB_model->select("select id,user_nicename,user_pass from tb_users where user_login = '".$this->input->post(username)."'");//可用于检测用户名是否已被注册
//         if ($query->result()!=null)
//         {
//         	$row = $query->row();
//         	if (isset($row))
//         	{
// 				if($str==$this->encryption->decrypt($row->user_pass))
// 				{
// 					$_SESSION[id]=$row->id;
//         			$_SESSION[user_nicename]=$row->user_nicename;
//         			return TRUE;
// 				}
//         	}
//         }else{	//空则登录失败
// //           $this->form_validation->set_message('password_check', 'The username or password is wrong!');
           
//         }
//         return FALSE;
//     } 

	public function password_check($str) //MD5
	{
		$this->load->library('encryption');
		$query=$this->DB_model->select("select id,user_nicename,user_pass from tb_users where user_login = '".$this->input->post(username)."'");//可用于检测用户名是否已被注册
		log_message('error', preg_replace('/\s+/', ' ', 'INFO --> '.$this->input->ip_address().' --> Execute sql:'.$this->db->last_query()));
		log_message('error', 'INFO --> '.$this->input->ip_address().' --> User login!');
		if ($query->result()!=null)
		{
			$row = $query->row();
			if (isset($row))
			{
				if(hash('md5', $str,false)==$row->user_pass)
				{
					$_SESSION[id]=$row->id;
					$_SESSION[user_nicename]=$row->user_nicename;
					return TRUE;
				}
			}
		}else{	//空则登录失败
			//           $this->form_validation->set_message('password_check', 'The username or password is wrong!');
			 
		}
		return FALSE;
	}
}
