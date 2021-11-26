<?php 
defined('BASEPATH') or exit ('No direct script 	access allowed');

Class M_tipe extends CI_Model
{
	public function get_tipe()
	{
		return $this->db->get('tipe')->result();
	}

	public function jumlah_tipe()
	{
		$this->db->select('*');
		$this->db->from('tipe');
		return $this->db->get()->num_rows();
	}
}

 ?>