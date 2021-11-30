<?php 
defined('BASEPATH') or exit ('No direct script 	access allowed');

Class Model_chart extends CI_Model{
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from ");
		return $data->result();
	}
 
}