<?php
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
}