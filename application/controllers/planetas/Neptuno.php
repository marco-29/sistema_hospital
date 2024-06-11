<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neptuno extends CI_Controller {
	public function index()
	{
		$this->load->view('layouts/header-neptuno');
		$this->load->view('planetas/neptuno/index');
		$this->load->view('layouts/footer');
	}
}
