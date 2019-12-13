<?php

class Admin_model extends CI_Model
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

            // jika password benar dan dia admin
            if($isPasswordTrue){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $admin]);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

}