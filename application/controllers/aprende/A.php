<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('usuarios_model');
		$this->load->model('usuarios_progreso_model');
    }

	public function index()
	{

		$user_identificador = $this->session->userdata('identificador');

		$usuario_progreso = $this->usuarios_progreso_model->obtener_progreso_de_usuario($user_identificador)->row();

		$data['usuario_progreso'] = $usuario_progreso;

		$this->load->view('layouts/header-aprende', $data);
		$this->load->view('aprende/a');
		$this->load->view('layouts/footer');
	}
}
