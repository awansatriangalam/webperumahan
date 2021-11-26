<?php 
defined('BASEPATH') or exit ('No direct script 	access allowed');

Class M_rumah extends CI_Model
{
	public function get_rumah()
	{
		return $this->db->get('rumah')->result();
	}

	public function jumlah_rumah()
	{
		$this->db->select('*');
		$this->db->from('rumah');
		return $this->db->get()->num_rows();
	} 
}

 ?>