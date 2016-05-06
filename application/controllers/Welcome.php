<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('index\welcome_message');
		$this->load->view('common\footer');
		
		
		if($_SESSION[username])
		{
			//登录时间和IP记录
		$this->load->helper('date');
		$datestring = '%Y-%m-%d	%H:%i:%s'; //2016-04-30	13:27:23
		date_default_timezone_set (PRC);//时间默认 是 格林尼治时间
		$time = time();
		$_SESSION[last_login_time] = mdate($datestring, $time);
		$this->load->model(DB_model);
		$_SESSION[last_login_ip]=$this->input->ip_address();
		$this->DB_model->update("UPDATE tb_users SET last_login_time = '".$_SESSION[last_login_time]."',last_login_ip='".$_SESSION[last_login_ip]."' WHERE user_login = '".$_SESSION[username]."';");
		
		}else{
			// echo fasle;
		}
		

		// $this->load->library('session');
		// $_SESSION['admin']="admin";
		// echo $_SESSION['admin'];
		// $this->session->admin="adminadmin";
		// echo $_SESSION['admin'];
		
		
	}
}
