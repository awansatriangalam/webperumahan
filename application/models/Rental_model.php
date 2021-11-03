<?php

class Rental_model extends CI_model
{
    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($table,$data,$where) {
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function pencarian($keyword=null){
        $this->db->select('*');
        $this->db->from('rumah');
        if(!empty($keyword)){
            $this->db->like('lokasi',$keyword);
            $this->db->or_like('kode_type',$keyword);
            $this->db->or_like('status',$keyword);
            $this->db->or_like('kamar_tidur',$keyword);
            $this->db->or_like('kamar_mandi',$keyword);
        }
        return $this->db->get()->result();
    }

    public function ambil_id_rumah($id)
    {
        $hasil = $this->db->where('id_rumah', $id)->get('rumah');
            if($hasil->num_rows() > 0){
                return $hasil->result();
            }else{
                return false;
            }
    }

    public function ambil_id_type($id)
    {
        $hasil = $this->db->where('id_type', $id)->get('tipe');
            if($hasil->num_rows() > 0){
                return $hasil->result();
            }else{
                return false;
            }
    }


    public function cek_login()
    {
        $username = set_value('username');
        $pass     = set_value('pass');

        $result = $this->db ->where('username', $username)
                            ->where('pass', md5($pass))
                            ->limit(1)
                            ->get('customer');
        
        if($result->num_rows() > 0 ) {
            return $result->row();
        }else{
            return FALSE;
        }
    }
}
?>