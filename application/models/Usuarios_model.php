<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
    public function obtener_todos_los_usuarios() {
        $query = $this->db
            ->order_by('nombre', 'asc')
            ->get('usuarios');
        return $query;
    }

    public function obtener_todos_los_activos() {
        $query = $this->db
            ->where('estatus', 'activo')
            ->order_by('nombre', 'asc')
            ->get('usuarios');
        return $query;
    }

    public function obtener_usuario_por_usuario($usuario) {
        $query = $this->db
            ->where('usuario', $usuario)
            ->select('t1.*')
            ->from("usuarios t1")
            ->get();
        return $query;
    }
}
