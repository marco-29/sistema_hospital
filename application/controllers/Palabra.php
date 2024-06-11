<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palabra extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('usuarios_model');
    }

    private $words = [
        'casa', 'perro', 'gato', 'árbol', 'niño', 'jugar', 'coche', 'pato', 'libro', 'mesa', 'C'
    ];

	public function index()
	{
		$usuarios_list = $this->usuarios_model->obtener_todos_los_usuarios()->result();
		$data['usuarios_list'] = $usuarios_list;

        // Selecciona una palabra al azar
        $random_word = $this->words[array_rand($this->words)];

        // Pasa la palabra seleccionada a la vista
        $data['word'] = $random_word;

		// $this->load->view('layouts/header');
		$this->load->view('palabra/index', $data);
		// $this->load->view('layouts/footer');
	}

    public function get_new_word()
    {
        // Selecciona una nueva palabra al azar
        $random_word = $this->words[array_rand($this->words)];

        // Devuelve la palabra en formato JSON
        echo json_encode(['word' => $random_word]);
    }
}
