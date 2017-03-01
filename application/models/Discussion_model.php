<?php
class Discussion_model extends CI_Model {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model(Response_model);
	}
	
	public function add($comment,$comment_type) 
	{
		session_start();
		$this->load->model(DB_model);
		$this->load->model(Time_model);
		$comment_time = $this->Time_model->getdata();
		return $this->DB_model->insert("INSERT INTO tb_discussion (user_id,comment_time,comment,comment_type) values ('".$_SESSION[id]."','".$comment_time."','".$comment."','".$comment_type."')");
	}
	
	public function get($comment_type=0)//指定类型的评论     头像：avatar 昵称：user_nicename ...
	{
		//链式连接
		$this->load->database();
		$this->db->from('tb_discussion')
				->select('user_id,comment_time,comment_type,comment,user_nicename,avatar')
				->join('tb_users', 'tb_discussion.user_id = tb_users.id', 'left')
				->order_by('comment_time', 'DESC');
		if(!empty($comment_type)){
			$this->db->where(array('comment_type' => $comment_type));
		}
		$query = $this->db->get();
		$this->Response_model->success($query->result_array());
	}
	
}