<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Util extends CI_Controller {

	public function __construct(){
		parent::__construct();
		echo '<pre>';
	}
	
	public function index($current_page=1)
	{
		
		echo 'util.index';
	}

	public function getPage($offset=0,$page_size=PER_PAGE){
		$this->load->database();
		$this->db->from('tb_discussion')->select('comment');
		$query = $this->db->get();
		
// 		$query = $this->db->query('select * from tb_discussion');
		var_dump($query->result());
		
	
	}
	
}
