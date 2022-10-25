<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_model extends CI_Model {
    private $_table = "food";

    public $id_food;
    public $name_food;
    public $stock;
    public $price;

	public function rules()
	{
        return [
            [
                "field" => "id_food",
                "label" => "identity food",
                "rules" => "required"
            ],
            [
                "field" => "name_food",
                "label" => "Name Food",
                "rules" => "required"
            ],
            [
                "field" => "stock",
                "label" => "stock food",
                "rules" => "required"
            ],
            [
                "field" => "price",
                "label" => "price food",
                "rules" => "required"
            ]
            ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getID($id_food)
    {
        return $this->db->get_where($this->_table, ["id_food" => $id_food])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->id_food = $post['id_food'];
        $this->name_food = $post['name_food'];
        $this->stock = $post['stock'];
        $this->price = $post['price'];

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id_food = $post['id_food'];
        $this->name_food = $post['name_food'];
        $this->stock = $post['stock'];
        $this->price = $post['price'];

        return $this->db->update($this->_table, $this, array('id_food' => $post['id_food']));
    }

    public function delete($id_food){
        return $this->db->delete($this->_table, array('id_food' => $id_food));
    }
}