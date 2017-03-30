<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model {

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}

	public function feedback()
	{
// 		$this->load->model(DB_model);
// 		$query=$this->DB_model->select("select *from tb_videocomment ORDER BY comment_time DESC;");//按评论时间排序
// 		echo json_encode($query->result_array());
	}

	public function add($array)
	{
		$this->load->model(DB_model);
		$this->load->model(Time_model);
		$comment_time = $this->Time_model->getdata();
		$this->DB_model->insert("INSERT INTO tb_feedback (user_id,feedback_time,suggestion,que1,que2,que3,que4,que5,que6,que7,que8) 
				values ('".$_SESSION[id]."','".$comment_time."','".$array['suggestion']."','".$array['que1']."','".$array['que2']."','".$array['que3']."','".$array['que4']."','".$array['que5']."','".$array['que6']."','".$array['que7']."','".$array['que8']."');");
		// 		$this->DB_model->insert("INSERT INTO TB_videocomment (video_id) values ('2');");
		header('Location:../../feedback');
	}


}