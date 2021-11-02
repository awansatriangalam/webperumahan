<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model {
  
  public function view(){
    return $this->db->get('rumah')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
  
  public function search($keyword){
    $this->db->like('lokasi',$keyword);
    $this->db->or_like('kode_type',$keyword);
    $this->db->or_like('status',$keyword);
    $this->db->or_like('kamar_tidur',$keyword);
    $this->db->or_like('kamar_mandi',$keyword);
    
    $result = $this->db->get('rumah')->result(); // Tampilkan data siswa berdasarkan keyword
    
    return $result; 
  }
}