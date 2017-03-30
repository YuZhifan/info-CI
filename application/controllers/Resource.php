<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$data['infoNav'] = $this->load->view('common/nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common/footer', '', TRUE);
		$this->load->model(DB_model);
		$query=$this->DB_model->select('select * from tb_resource;');
		log_message('error', preg_replace('/\s+/', ' ', 'INFO --> '.$this->input->ip_address().' --> Execute sql:'.$this->db->last_query()));
		$this->load->model(Resource_model);
		foreach($query->result_array() as $row)
		{
			$list[$row[id]]=array(
					'content' => $this->Resource_model->videodownload($row),
					'type' => $row['type'],
			);
		}
		$data['list'] = $list;
		$this->load->view('resource/resource',$data);
	}
	
	//测试用方法
	public function videodownload()
	{
		$this->load->model(Resource_model);
		$this->Resource_model->videodownload();
	
	}
}
