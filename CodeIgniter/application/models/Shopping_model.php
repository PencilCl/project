<?php

class Shopping_model extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->database();
	}

	public function addToShopping() {
		$userid = $_SESSION['user']->id;
		$amount = $this->input->post('number');
		$pid = $this->input->post('pid');
		if ($amount == 0) {
			return ;
		}
		$product = $this->db->select('instock')->where('id', $pid)->get('product')->row();
		if (is_null($product)) {
			return '商品不存在';
		}
		$stock = $product->instock;
		if ($stock < $amount) {
			return '库存不足！';
		}
		// 更新商品库存
		$data = array('instock' => $stock - $amount);
		$where = array('id' => $pid);
		$this->db->update('product', $data, $where);

		// 添加到购物车
		$data = array('user' => $userid, 'amount' => $amount, 'product' => $pid);
		$this->db->insert('shopping', $data);

		return $this->db->select('count(*) as count')->where('user', $userid)->get('shopping')->row()->count;
	}

	public function getShoppingNum() {
		if (!isset($_SESSION['user'])) {
			return 0;
		}
		$userid = $_SESSION['user']->id;
		return $this->db->select('count(*) as count')->where('user', $userid)->get('shopping')->row()->count;
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