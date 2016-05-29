<?php
class Discussion_model extends CI_Model {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		
	}
	
	public function add($comment,$comment_type) 
	{
		session_start();
		$this->load->model(DB_model);
		$this->load->model(Time_model);
		$comment_time = $this->Time_model->getdata();
		return $this->DB_model->insert("INSERT INTO tb_discussion (user_id,comment_time,comment,comment_type) values ('".$_SESSION[id]."','".$comment_time."','".$comment."','".$comment_type."')");
	}
	
	public function comment($comment_type)//指定类型的评论     头像：avatar 昵称：user_nicename ...
	{
		$this->load->model(DB_model);
		$query=$this->DB_model->select("select avatar,user_nicename,comment_time,comment from tb_discussion,tb_users where tb_discussion.user_id = tb_users.id and comment_type='".$comment_type."' ORDER BY comment_time DESC;");//按评论时间排序
		echo json_encode($query->result_array());
	}
	
	public function comment()//全部类型
	{
		$this->load->model(DB_model);
		$query=$this->DB_model->select("select avatar,user_nicename,comment_time,comment from tb_discussion,tb_users where tb_discussion.user_id = tb_users.id ORDER BY comment_time DESC;");//按评论时间排序
		echo json_encode($query->result_array());
	}
}