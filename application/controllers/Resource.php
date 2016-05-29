<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource extends CI_Controller {

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
		$data['infoNav'] = $this->load->view('common\nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common\footer', '', TRUE);
		$this->load->model(DB_model);
		$query=$this->DB_model->select('select * from tb_video;');
		$this->load->model(Resource_model);
		foreach($query->result_array() as $row)
		{
			$list[$row[id]]=$this->Resource_model->videodownload($row);
		}
		$data['list'] = $list;
		$this->load->view('resource\resource',$data);
	}
	
	//测试用方法
	public function videodownload()
	{
		$this->load->model(Resource_model);
		$this->Resource_model->videodownload();
	
	}
}
