<?php

class Shopping_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function addToShopping() {

	}

	public function alterShopping($id) {

	}

	public function deleteShopping($id) {
		return $this->db->delete('shopping', array('id', $id));
	}

	public function getShopping($userId) {
		$result = array();
		$query = $this->db->select('product')
									->where('user', $userId)
									->get('shopping');
		foreach ($query->result() as $product) {
			$query = $this->db->select('*')
										->where('id', $product->product)
										->get('product');
			$result[] = $query->row();
		}
		return $result;
	}
}