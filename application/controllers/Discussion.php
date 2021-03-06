<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$this->load->model(DB_model);
		$data['infoNav'] = $this->load->view('common/nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common/footer', '', TRUE);
		$this->load->view('discussion/discussion', $data);
	}
	
	public function addComment()
	{
		$this->load->helper('url');
		$this->load->library('form_validation');
		session_start();
		$this->form_validation->set_rules('comment', 'Comment', 'required|min_length[1]|max_length[450]');
		$this->form_validation->set_rules('discussion_type', 'Discussion_type', 'required');
	
		if ($this->form_validation->run() == FALSE)
		{
			header('Location:../discussion');
		}
		else{
	
			if($_SESSION[username]&&$_SESSION[id])
			{
				$this->load->model(Discussion_model);
				$comment=$this->input->post(comment);
				$type=$this->input->post(discussion_type);
				$this->Discussion_model->add($comment,$type);
				header('Location:../discussion');
			}else{
				header('Location:../discussion');
			}
	
		}
	
	}
	public function searchComment(){
		$this->load->model(DB_model);
		$query = $this->DB_model->select('select * from tb_discussion');
		return $query->result();
	}
	
	public function getComment(){
		$comment_type = $this->input->get('comment_type');
		$page_number = $this->input->get('page_number');
		$this->load->model(Discussion_model);
		return $this->Discussion_model->get($comment_type,$page_number);
	}
	
	public function getMaxPage(){
		$comment_type = is_null($this->input->get('comment_type'))?0:$this->input->get('comment_type');
		$page_size = empty($this->input->get('page_size'))?10:$this->input->get('page_size');
		$this->load->model(Discussion_model);
		return $this->Discussion_model->getTotalPage($comment_type,$page_size);
	}
	
	public function fenye(){
// 		$this->load->library('pagination');
		$this->load->model(DB_model);
		$this->DB_model->fenye();
// 		$query = $this->DB_model->select('select count(comment) from tb_discussion');
// 		$row=(array)$query->row();

		
// 		$config['base_url'] = 'http://localhost/index.php/discussion/fenye';
// 		$config['total_rows'] = $row['count(comment)'];
// 		$config['per_page'] = 2;
		
// 		$this->pagination->initialize($config);
	
// 		echo $this->pagination->create_links();
		
// 			var_dump($config);
// 		exit();		
	}
	
}
