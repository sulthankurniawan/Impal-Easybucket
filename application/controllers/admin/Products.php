<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library("form_validation");
        $this->load->model("admin_model");
        if($this->admin_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["products"] = $this->db->query("SELECT * FROM product");
        $this->load->view("easybucket_test/navAdmin");
        $this->load->view("admin/product/adminDelete", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        echo $validation->run();
        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("easybucket_test/navAdmin");
        $this->load->view("admin/product/adminAdd");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()){
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();

        $this->load->view("easybucket_test/navAdmin");
        $this->load->view("admin/product/adminUpdate", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/product/'));
        }
    }

    private function _uploadImage(){
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']			= true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
            return "default.jpg";
    }
}