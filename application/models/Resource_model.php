<?php
class Resource_model extends CI_Model{

	public function __construct()
	{

	}
	public function videodownload($row)
	{

			$data['name'] = $row['name'];
			$data['src'] = $row['src'];
			$data['cover']  =$row['cover'];
			$data['type'] =$row['type'];
			return $this->load->view('resource\videodownload',$data,TRUE);
	}
}