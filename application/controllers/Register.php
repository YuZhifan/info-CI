<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		session_start();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model(DB_model);
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[5]|max_length[15]|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login/login');
        }
        else
        {
			
			$this->load->helper('date');
			$datestring = '%Y-%m-%d	%H:%i:%s'; //2016-04-30	13:27:23
			date_default_timezone_set (PRC);//时间默认 是 格林尼治时间
			$time = time();
			$_SESSION[last_login_time] = mdate($datestring, $time);
			$_SESSION[username]=$this->input->post(username);
// 			$password=$this->encryption->encrypt($this->input->post(password));  //CI自带加密类 可逆 不推荐加密密码
			$password= hash('md5', $this->input->post(password),false);  //MD5加密
			$this->DB_model->insert("INSERT INTO tb_users (user_login,user_pass,user_nicename,user_email,last_login_time,create_time) values ('".$this->input->post(username)."','".$password."','".$this->input->post(username)."','".$this->input->post(email)."','".$_SESSION[last_login_time]."','".$_SESSION[last_login_time]."');");
			$query=$this->DB_model->select("select id,user_nicename from tb_users where user_login = '".$this->input->post(username)."' and user_pass = '".$password."'");
			$row = $query->row();
			if (isset($row))
			{
				$_SESSION[id]=$row->id;
				$_SESSION[user_nicename]=$row->user_nicename;
			}
			header('Location:welcome/../');
        }
	}
	
	public function username_check($str)
    {	
    	$this->load->model(DB_model);	
		$query=$this->DB_model->select("select id from tb_users where user_login = '".$str."'");//可用于检测用户名是否已被注册
        if ($query->result()!=null)//已被注册则不为空
        {
//            $this->form_validation->set_message('username_check', 'The {field} has existed!');
            echo "YES";
            return FALSE;
        }
        else
        {
            echo "NO";
            return TRUE;
        }
    }
}
