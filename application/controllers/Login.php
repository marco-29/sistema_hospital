<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();

        $this->load->model('usuarios_model');
    }

	public function index()
	{
		$this->load->view('layouts/header-mascara');
		$this->load->view('login/index');
		$this->load->view('layouts/footer');
		
	}

	public function iniciar_sesion()
	{
		// Establecer validaciones
		$this->form_validation->set_rules('usuario', 'usuario', 'required');
		$this->form_validation->set_rules('password', 'contraseña', 'required');

		if ($this->form_validation->run() == false) {

			if ($this->session->userdata('en_sesion')) {
				redirect('menu');
			}

			$this->load->view("login/index");
		} else {

			$usuario_row = $this->usuarios_model->obtener_usuario_por_usuario($this->input->post('usuario'))->row();

            if (!$usuario_row) {
                redirect('login/123');
            }

            $this->session->set_flashdata('usuario', $this->input->post('usuario'));

            // if (!password_verify($this->input->post('password'), $usuario_row->password)) {
			// 	redirect('login/124');
            // }

			if ($this->input->post('password') !== $usuario_row->password) {
				redirect('login/124');
			}

            $this->_preparar_datos_sesion(
                $usuario_row->usuario,
                $usuario_row->nombre,
                $usuario_row->identificador,
                $usuario_row->nombre_tutor,
                //$relacion_usuario_rol_row->rol_id
                null
            );

            redirect('menu');

            $this->load->view("login/index");
		}
	}

	public function cerrar_sesion()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }

	/**
	 * Función privada que prepara los datos que el usuario que recién inicia sesión va a requerir
	 * mientras se encuentre en ella.
	 *
	 * @param string $usuario
	 * @param string $nombre
	 * @param string $identificador
	 * @param string $nombre_tutor
	 * @return void
	 */
	private function _preparar_datos_sesion($usuario, $nombre, $identificador, $nombre_tutor)
	{
		$sesion_data = array(
			'usuario' => $usuario,
			'nombre' => $nombre,
			'identificador' => $identificador,
			'nombre_tutor' => $nombre_tutor,
			'en_sesion' => true,
		);

		$this->session->set_userdata($sesion_data);
	}
}
