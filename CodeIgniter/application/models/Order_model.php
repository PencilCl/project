<?php

class Order_model extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->database();
	}

	public function createOrder() {

	}

	public function alterOrder($orderId) {

	}

	public function confirmOrder($orderId) {
		$data = array('confirm'=>1);
		$where = 'id='.$orderId;
		return $this->db->update('order', $data, $where);
	}

	public function getOrderProduct($orderId) {
		$products = array();
		$query = $this->db->select('orderlist')
									->where('order', $orderId)
									->get('ordermap');
		foreach ($query->result() as $orderlist) {
			$query = $this->db->select('product')
										->where('id', $orderlist->orderlist)
										->get('orderlist');
			$product = $query->db->select('*')
											->where('id', $query->row()->product)
											->get('product');
			$products[] = $product->row();
		}
		return $products;
	}
}