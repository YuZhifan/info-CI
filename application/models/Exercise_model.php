<?php
class Exercise_model extends CI_Model {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model(Response_model);
	}
	
	public function get($chapter_id=1)//指定类型的评论     头像：avatar 昵称：user_nicename ...
	{
		//链式连接
		$this->load->database();
		$this->db->from('tb_question')
				->select('*')
				->order_by('que_id', 'ASC');
		if(!empty($chapter_id)){
			$this->db->where(array('chapter_id' => $chapter_id));
		}
		$query = $this->db->get();
		$this->Response_model->success($query->result_array());
	}
	
	public function getRandom($amount)//获取随机测试的试题
	{
		$this->load->database();
		$this->db->from('tb_question')
		->order_by('Rand()', 'ASC')
		->limit($amount);
		$query = $this->db->get();
		$this->Response_model->success($query->result_array());
	}
	
}