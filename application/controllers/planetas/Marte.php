<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marte extends CI_Controller {
	public function index()
	{
		$this->load->view('layouts/header-marte');
		$this->load->view('planetas/marte/index');
		$this->load->view('layouts/footer');
	}
}
