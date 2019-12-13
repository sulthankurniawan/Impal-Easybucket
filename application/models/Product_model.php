<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "product";

    public $product_id;
    public $nama;
    public $harga;
    public $category_id;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        // $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->category_id = $post["category_id"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->description = $post["description"];
        $this->category_id = $post["category_id"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}