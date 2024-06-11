<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aprende extends CI_Controller
{

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
		$this->load->view('aprende/index');
		$this->load->view('layouts/footer');
	}

	public function actualizar_progreso()
	{
		$user_identificador = $this->session->userdata('identificador');
		$incremento = 12.5;

		$usuario_progreso = $this->usuarios_progreso_model->obtener_progreso_de_usuario($user_identificador)->row();

		if ($usuario_progreso->progreso_aprende < 100) {

			$this->usuarios_progreso_model->actualizar_progreso($user_identificador, $incremento);

			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'false']);
		}
	}
}
