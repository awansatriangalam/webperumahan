<?php 
defined('BASEPATH') or exit ('No direct script 	access allowed');

Class M_user extends CI_Model
{
	public function get_user()
	{
		return $this->db->get('user')->result();
	}

	public function jumlah_admin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id',1);
		return $this->db->get()->num_rows();
	}

	public function jumlah_customer()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id',2);
		return $this->db->get()->num_rows();
	}
}

 ?>