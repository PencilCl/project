<?php

class Product_model extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->database();
	}

	public function getProduct() {
		$query = $this->db->get('product');
		return $query->result();
	}

	public function getProductById($id) {
		$query = $this->db->where('id', $id)
									->get('product');
		return $query->row();
	}
}