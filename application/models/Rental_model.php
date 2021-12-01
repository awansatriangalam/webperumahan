<?php

class Rental_model extends CI_model
{
    public function get_data($table){
        return $this->db->get($table);
    }

    public function get_where($where,$table){
        return $this->db->get_where($table,$where);
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

    public function ambil_id_rumah($id)
    {
        $hasil = $this->db->where('id_rumah', $id)->get('rumah');
            if($hasil->num_rows() > 0){
                return $hasil->result();
            }else{
                return false;
            }
    }

    public function ambil_id_ulasan($id)
    {
        $hasil = $this->db->where('id_rumah', $id)->get('ulas');
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

    public function downloadBukti($id)
    {
        $query = $this->db->get_where('transaksi', array('id_pesan' => $id));
        return $query->row_array();
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

    public function update_pass($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('rumah');
        $this->db->like('nama_rumah',$keyword);
        $this->db->or_like('kode_type',$keyword);
        $this->db->or_like('luas_bangunan',$keyword);
        $this->db->or_like('status',$keyword);
        $this->db->or_like('lokasi',$keyword);
        $this->db->or_like('kamar_tidur',$keyword);
        $this->db->or_like('kamar_mandi',$keyword);
        $this->db->or_like('ruangan',$keyword);
        $this->db->or_like('lantai',$keyword);
        $this->db->or_like('garasi',$keyword);
        $this->db->or_like('deskripsi',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('kota',$keyword);
        $this->db->or_like('kode_pos',$keyword);
        $this->db->or_like('harga',$keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_type($keyword)
    {
        $this->db->select('*');
        $this->db->from('tipe');
        $this->db->like('nama_type',$keyword);
        $this->db->or_like('kode_type',$keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_customer($keyword)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->like('nama_user',$keyword);
        $this->db->or_like('email',$keyword);
        $this->db->or_like('alamat_user',$keyword);
        $this->db->or_like('no_tlp',$keyword);
        $this->db->or_like('role_id',2,$keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_transaksi($keyword)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->like('nama',$keyword);
        $this->db->or_like('username',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('no_tlp',$keyword);
        return $this->db->get()->result();
    }
}
?>