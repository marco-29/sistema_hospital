<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pacientes extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('usuarios_model');
		$this->load->model('pacientes_model');
		$this->load->model('enfermedades_model');
	}

	public function index()
	{
		$pacientes_list = $this->pacientes_model->obtener_todos_los_pacientes_enfermedades()->result();
		$enfermeddes_list = $this->enfermedades_model->obtener_todas_las_enfermedades()->result();

		$data['enfermeddes_list'] = $enfermeddes_list;
		$data['pacientes_list'] = $pacientes_list;

		$this->load->view('layouts/header');
		$this->load->view('pacientes/index', $data);
		$this->load->view('layouts/footer');
	}

	public function agregar()
	{
		$enfermeddes_list = $this->enfermedades_model->obtener_todas_las_enfermedades()->result();
		$data['enfermeddes_list'] = $enfermeddes_list;

		$this->load->view('layouts/header');
		$this->load->view('pacientes/agregar', $data);
		$this->load->view('layouts/footer');
	}

	public function agregar_paciente()
	{
		// Establecer validaciones
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[240]');
		$this->form_validation->set_rules('edad', 'Edad', 'trim|required|max_length[240]');
		$this->form_validation->set_rules('peso', 'Peso', 'trim|required|max_length[240]');
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|max_length[240]');
		$this->form_validation->set_rules('enfermedad', 'Enfermedad', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/header');
			$this->load->view('pacientes/index');
			$this->load->view('layouts/footer');
		} else {


			$fecha_registro = date("Y-m-d H:i:s");
			$key_1 = "pacientes-" . date("Y-m-d-H-i-s", strtotime($fecha_registro));
			$identificador_1 = hash("crc32b", $key_1);

			// Preparar datos para hacer el insert en la bd
			$data = array(
				'identificador' => $identificador_1,
				'nombre' => $this->input->post('nombre'),
				'edad' => $this->input->post('edad'),
				'peso' => $this->input->post('peso'),
				'telefono' => $this->input->post('telefono'),
				'enfermedad_identificador' => $this->input->post('enfermedad'),
				'fecha_registro' => date('Y-m-d H:i:s')
			);

			if ($this->db->insert('pacientes', $data)) {
				redirect('pacientes');

			}

			$this->load->view('registrar/registrar_usuario', array('mensaje_error' => 'Ha ocurrido un error al intentar realizar el registro, por favor inténtelo más tarde'));
		}
	}

	public function eliminar($identificador)
	{
		$paciente = $this->pacientes_model->obtener_paciente_por_identificador($identificador)->row();

		$this->pacientes_model->eliminar_paciente_por_identificador($paciente->identificador);

		$pacientes_list = $this->pacientes_model->obtener_todos_los_pacientes_enfermedades()->result();
		$data['pacientes_list'] = $pacientes_list;

		$this->load->view('layouts/header');
		$this->load->view('pacientes/index', $data);
		$this->load->view('layouts/footer');
	}

	public function eliminar_enfermedad($identificador)
	{
		$enfermedad = $this->enfermedades_model->obtener_enfermedad_por_identificador($identificador)->row();

		$this->enfermedades_model->eliminar_enfermedad_por_identificador($enfermedad->identificador);

		$pacientes_list = $this->pacientes_model->obtener_todos_los_pacientes_enfermedades()->result();
		$data['pacientes_list'] = $pacientes_list;

		$this->load->view('layouts/header');
		$this->load->view('pacientes/index', $data);
		$this->load->view('layouts/footer');
	}
}
