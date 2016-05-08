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
			
			$this->load->helper('date');
			$datestring = '%Y-%m-%d	%H:%i:%s'; //2016-04-30	13:27:23
			date_default_timezone_set (PRC);//时间默认 是 格林尼治时间
			$time = time();
			$_SESSION[last_login_time] = mdate($datestring, $time);
			$_SESSION[username]=set_value(username);
			header('Location:welcome/../');
			// $this->DB_model->update("");
			
            
        }
	}
	
	public function password_check($str)
    {
		
		$query=$this->DB_model->select("select id,user_nicename from tb_users where user_login = '".set_value(username)."' and user_pass = '".set_value(password)."'");//可用于检测用户名是否已被注册
        if ($query->result()==null)//空则登录失败
        {
//             $this->form_validation->set_message('password_check', 'The username or password is wrong!');
            return FALSE;
        }
        else
        {
        	$row = $query->row();
        	if (isset($row))
        	{
        		$_SESSION[id]=$row->id;
        		$_SESSION[user_nicename]=$row->user_nicename;
        	}
            return TRUE;
        }
    }
}
