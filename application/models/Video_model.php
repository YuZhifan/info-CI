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
		$this->load->helper('date');
		$datestring = '%Y-%m-%d	%H:%i:%s'; //2016-04-30	13:27:23
		date_default_timezone_set (PRC);//时间默认 是 格林尼治时间
		$time = time();
		$comment_time = mdate($datestring, $time);
		$this->DB_model->insert("INSERT INTO tb_videocomment (video_id,user_id,comment_time,user_nicename,comment_src,comment) values ('1','".$_SESSION[id]."','".$comment_time."','".$_SESSION[user_nicename]."','views/common/img/list-item1.jpg','".$comment."');");
// 		$this->DB_model->insert("INSERT INTO TB_videocomment (video_id) values ('2');");
	}
	
	
}