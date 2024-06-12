<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enfermedades_model extends CI_Model {
    public function obtener_todas_las_enfermedades() {
        $query = $this->db
            ->order_by('nombre', 'asc')
            ->get('enfermedades');
        return $query;
    }
}
