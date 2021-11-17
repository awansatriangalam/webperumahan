<?php
    class Login_model extends CI_Model
    {
        //cek nip dan pass adminn
        public function auth_adminn($username,$pass){
            $query=$this->db->query("SELECT * FROM adminn WHERE username='$username' AND pass=MD5('$pass') LIMIT 1");
            return $query;
        }
    
        //cek nim dan pass customer
        public function auth_customer($username,$pass){
            $query=$this->db->query("SELECT * FROM customer WHERE username='$username' AND pass=MD5('$pass') LIMIT 1");
            return $query;
        }
    }
?>