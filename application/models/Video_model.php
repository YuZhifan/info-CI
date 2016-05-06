<?php
class Video_model extends CI_Model {

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function insert()
	{
		echo "insert";
	}

	public function comment()
	{
		$this->load->model(DB_model);
		$query=$this->DB_model->select("select *from tb_videocomment;");
		echo json_encode($query->result_array());
	}
	
	
}