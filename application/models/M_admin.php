<?php

class M_admin extends CI_Model
{
    private $_table = "admins";

    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('admin_id', 1);
        $admin = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($admin){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $admin->password);
            // jika password benar
            if($isPasswordTrue){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $admin]);
                $this->_updateLastLogin($admin->admin_id);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($admin_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$admin_id}";
        $this->db->query($sql);
    }

}