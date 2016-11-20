<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		if (isset($_SESSION['user'])) {
			$data['user'] = $_SESSION['user'];
		}
		$this->load->view('home', $data);
	}
}