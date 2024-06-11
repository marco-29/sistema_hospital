<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urano extends CI_Controller {
	public function index()
	{
		$this->load->view('layouts/header-urano');
		$this->load->view('planetas/urano/index');
		$this->load->view('layouts/footer');
	}
}
