<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('shopping_model', 'shopping');
		$this->load->model('account_model', 'account');
	}

	public function index() {
		$this->account->login();

		$this->load->view('shopping');
	}

	public function addToShopping() {
		$this->account->login();
		$result = $this->shopping->addToShopping();
		if ($this->input->post('ajax') == true) {
			echo $result;
			return ;
		}
		header("Location:".siteurl('shopping'));
	}

}