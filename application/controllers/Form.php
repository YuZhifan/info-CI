<?php
//c测试用 没什么卵用
class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        
        $this->form_validation->set_rules(
		    'username', 'Username',
		    'required|min_length[5]|max_length[12]',
		    array(
		        'required'  => 'You have not provided %s.',
		        'is_unique' => 'This %s already exists.'
		    )
		);
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        
        
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
		      	echo set_value('username'); 
      		 	echo set_value('password'); 
      		  	echo set_value('passconf'); 
      		  	echo set_value('email'); 
            $this->load->view('formsuccess');
        }
    }
}