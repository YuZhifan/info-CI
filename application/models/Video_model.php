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
		$query=$this->DB_model->select("select *from tb_videocomment ORDER BY comment_time DESC;");//按评论时间排序
		echo json_encode($query->result_array());
	}
	
	public function add($comment)
	{
		$this->load->model(DB_model);
		$this->load->mdoel(Time_model);
		$comment_time = $this->Time_model->getdata();
		$this->DB_model->insert("INSERT INTO tb_videocomment (video_id,user_id,comment_time,user_nicename,comment_src,comment) values ('1','".$_SESSION[id]."','".$comment_time."','".$_SESSION[user_nicename]."','views/common/img/list-item1.jpg','".$comment."');");
// 		$this->DB_model->insert("INSERT INTO TB_videocomment (video_id) values ('2');");
	}
	
	
}