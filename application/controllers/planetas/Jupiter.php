<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jupiter extends CI_Controller {
	public function index()
	{
		$this->load->view('layouts/header-jupiter');
		$this->load->view('planetas/jupiter/index');
		$this->load->view('layouts/footer');
	}
}
