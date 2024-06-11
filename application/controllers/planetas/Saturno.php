<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saturno extends CI_Controller {
	public function index()
	{
		$this->load->view('layouts/header-saturno');
		$this->load->view('planetas/saturno/index');
		$this->load->view('layouts/footer');
	}
}
