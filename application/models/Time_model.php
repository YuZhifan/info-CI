<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_model extends CI_Model {

	
	
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function getdata()
	{
		$this->load->helper('date');
		$datestring = '%Y-%m-%d	%H:%i:%s'; //2016-04-30	13:27:23
		date_default_timezone_set (PRC);//时间默认 是 格林尼治时间
		$time = time();
		return mdate($datestring, $time);
	}
}