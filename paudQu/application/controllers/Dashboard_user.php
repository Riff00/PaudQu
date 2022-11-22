<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('user/dashboard');
		$this->load->view('layout/footer');
	}
}