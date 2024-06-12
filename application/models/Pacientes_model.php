<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pacientes_model extends CI_Model {
    public function obtener_todos_los_pacientes() {
        $query = $this->db
            ->order_by('nombre', 'asc')
            ->get('pacientes');
        return $query;
    }

    public function obtener_todos_los_pacientes_enfermedades() {
        $query = $this->db
            ->select('t1.*,
            t2.nombre as nombre_enfermedad')
            ->from('pacientes t1')
            ->join('enfermedades t2', 't1.enfermedad_identificador = t2.identificador')
            ->get();
        return $query;
    }

    public function obtener_paciente_por_identificador($identificador) {
        $query = $this->db
            ->where('identificador', $identificador)
            ->get('pacientes');
        return $query;
    }

    public function eliminar_paciente_por_identificador($identificador) {
        $query = $this->db
            ->where('identificador', trim(strval($identificador)))
            ->delete('pacientes');

        return $query;
    }
}
