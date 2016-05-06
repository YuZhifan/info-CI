<?php
class Email_model extends CI_Model {

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function sendmail()
	{
		$this->load->library('email');
		$this->email->from('q51970117@163.com', 'Your Name');
		$this->email->to('602591511@qq.com');

		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		$this->email->send();
		echo $this->email->print_debugger();
	}
	
	public function sendmailto($to)
	{
		$this->load->library('email');
		$this->email->from('q51970117@163.com', 'Your Name');
		$this->email->to($to);	
		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		$this->email->send();
		echo $this->email->print_debugger();
		
	}

	
}