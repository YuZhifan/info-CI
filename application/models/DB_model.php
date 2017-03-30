<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DB_model extends CI_Model {

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->database();
	}
	
	public function close()
	{
		$this->db->close();
	}
	
	public function select($sql)
	{
		$query=$this->db->query($sql);
		return $query;
	}
	
	public function result($query)
	{
		foreach ($query->result() as $row)
		{
			var_dump($row);
		}
	}
	
	public function insert($sql)
	{
		$rs=$this->db->query($sql);
		if($rs){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function update($sql)
	{
		$rs=$this->db->query($sql);
		if($rs){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function delete($sql)
	{
		$rs=$this->db->query($sql);
		if($rs){
			return TRUE;
		}else{
			return FALSE;
		}
		
	}
	
	public function fenye(){
		$this->load->library('pagination');
// 		$this->load->model(DB_model);
// 		$query = $this->DB_model->select('select count(comment) from tb_discussion');
// 		$row=(array)$query->row();
// 		$config['base_url'] = site_url('');
	
	
// 		$config['base_url'] = 'http://localhost/index.php/discussion/fenye';
// 		$config['total_rows'] = $row['count(comment)'];
// 		$config['per_page'] = 'select * from tb_discussion';
	
// 		$this->pagination->initialize($config);
	
// 		echo $this->pagination->create_links();
	
		// 			var_dump($config);
		// 		exit();
		
		echo PER_PAGE;
// 		$this->load->helper('url');
// 		echo base_url();
	}
}