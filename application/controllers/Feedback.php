<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$data['infoNav'] = $this->load->view('common/nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common/footer', '', TRUE);
		$this->load->view('feedback/feedback',$data);	
	}
	
	public function addFeedback()
	{
		$this->load->helper('url');
		$this->load->library('form_validation');
		session_start();
		$this->form_validation->set_rules('suggestion', 'Suggestion', 'required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('que1', 'Que1', 'required');
		$this->form_validation->set_rules('que2', 'Que2', 'required');
		$this->form_validation->set_rules('que3', 'Que3', 'required');
		$this->form_validation->set_rules('que4', 'Que4', 'required');
		$this->form_validation->set_rules('que5', 'Que5', 'required');
		$this->form_validation->set_rules('que6', 'Que6', 'required');
		$this->form_validation->set_rules('que7', 'Que7', 'required');
		$this->form_validation->set_rules('que8', 'Que8', 'required');
		
	
		if ($this->form_validation->run() == FALSE)
		{
			header('Location:../feedback');
		}
		else
		{
	
			if($_SESSION[username]&&$_SESSION[id])
			{
				$this->load->model(Feedback_model);
				$array = array(
						"que1" => $this->input->post(que1),
						"que2" => $this->input->post(que2),
						"que3" => $this->input->post(que3),
						"que4" => $this->input->post(que4),
						"que5" => $this->input->post(que5),
						"que6" => $this->input->post(que6),
						"que7" => $this->input->post(que7),
						"que8" => $this->input->post(que8),
						"suggestion" => $this->input->post(suggestion),
				);
				$this->Feedback_model->add($array);
	
	
				header('Location:../feedback');
			}else{
				$this->load->model(DB_model);
				header('Location:../feedback');
			}
	
		}
	
	}
}
