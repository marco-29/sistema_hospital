<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrar extends CI_Controller
{

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
		$this->load->view('layouts/header');
		$this->load->view('registrar/index');
		$this->load->view('layouts/footer');
	}

	public function registrar_usuario()
	{
		// Establecer validaciones
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[240]');
		$this->form_validation->set_rules('usuario', 'Usuario', 'required|max_length[50]|is_unique[usuarios.usuario]');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/header');
			$this->load->view('registrar/index');
			$this->load->view('layouts/footer');
		} else {


			$fecha_registro = date("Y-m-d H:i:s");
			$key_1 = "usuarios-" . date("Y-m-d-H-i-s", strtotime($fecha_registro));
			$identificador_1 = hash("crc32b", $key_1);

			// Preparar datos para hacer el insert en la bd
			$data = array(
				'identificador' => $identificador_1,
				'nombre' => $this->input->post('nombre'),
				'usuario' => $this->input->post('usuario'),
				// 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'password' => $this->input->post('password'),
				'fecha_registro' => date('Y-m-d H:i:s')
			);

			if ($this->db->insert('usuarios', $data)) {
				$query = $this->db->query('SELECT * FROM `usuarios` WHERE BINARY `usuario` = ' . $this->db->escape($data['usuario']) . '');
				$data_usuario = $query->row();
				$this->_preparar_datos_sesion($data_usuario->usuario, $data_usuario->nombre, $data_usuario->identificador, NULL, '');
				redirect('pacientes');
			}

			$this->load->view('registrar/registrar_usuario', array('mensaje_error' => 'Ha ocurrido un error al intentar realizar el registro, por favor inténtelo más tarde'));
		}
	}

	/**
	 * Función privada que prepara los datos que el usuario que recién inicia sesión va a requerir
	 * mientras se encuentre en ella.
	 *
	 * @param string $usuario
	 * @param string $nombre
	 * @param string $identificador
	 * @return void
	 */
	private function _preparar_datos_sesion($usuario, $nombre, $identificador)
	{
		$sesion_data = array(
			'usuario' => $usuario,
			'nombre' => $nombre,
			'identificador' => $identificador,
			'en_sesion' => true,
		);

		$this->session->set_userdata($sesion_data);
	}
}
