<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('product_model', 'product');
	}

	public function index() {
		$this->load->view('product');
	}

	public function getProductById() {
		echo json_encode($this->product->getProductById($this->input->get('pid')), JSON_UNESCAPED_UNICODE);
	}

	public function getProduct() {
		echo json_encode($this->product->getProduct(), JSON_UNESCAPED_UNICODE);
	}

	public function productNum() {
		echo $this->product->productNum();
	}

	public function addProduct() {
		echo $this->product->addProduct();
	}
}