<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tierra extends CI_Controller {
	public function index()
	{
		$this->load->view('layouts/header-tierra');
		$this->load->view('planetas/tierra/index');
		$this->load->view('layouts/footer');
	}
}
