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
		$query=$this->DB_model->select("select avatar,user_nicename,comment_time,comment from tb_videocomment,tb_users where tb_videocomment.user_id = tb_users.id ORDER BY comment_time DESC;");//按评论时间排序
		echo json_encode($query->result_array());
	}
	
	public function add($comment)
	{
		$this->load->model(DB_model);
		$this->load->model(Time_model);
		$comment_time = $this->Time_model->getdata();
		return $this->DB_model->insert("INSERT INTO tb_videocomment (video_id,user_id,comment_time,comment) values ('1','".$_SESSION[id]."','".$comment_time."','".$comment."');");
// 		$this->DB_model->insert("INSERT INTO TB_videocomment (video_id) values ('2');");
	}
	
	
}