<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('usuarios_model');
		$this->load->model('usuarios_progreso_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$user_identificador = $this->session->userdata('identificador');

		$usuario_progreso = $this->usuarios_progreso_model->obtener_progreso_de_usuario($user_identificador)->row();

		$data['usuario_progreso'] = $usuario_progreso;

		$this->load->view('layouts/header-aprende', $data);
		$this->load->view('aprende/d');
		$this->load->view('layouts/footer');
	}
}
