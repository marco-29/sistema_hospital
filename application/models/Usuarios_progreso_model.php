<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_progreso_model extends CI_Model {
    public function obtener_todos_los_usuarios() {
        $query = $this->db
            ->order_by('nombre', 'asc')
            ->get('usuarios_progreso');
        return $query;
    }

    public function obtener_todos_los_activos() {
        $query = $this->db
            ->where('estatus', 'activo')
            ->order_by('nombre', 'asc')
            ->get('usuarios_progreso');
        return $query;
    }

    public function obtener_usuario_por_usuario($usuario) {
        $query = $this->db
            ->where('usuario', $usuario)
            ->select('t1.*')
            ->from("usuarios_progreso t1")
            ->get();
        return $query;
    }

    public function actualizar_progreso($user_identificador, $incremento) {
        $this->db->set('progreso_aprende', 'progreso_aprende + ' . $incremento, FALSE);
        $this->db->where('usuario_identificador', $user_identificador);
        $this->db->update('usuarios_progreso');
    }

    public function obtener_progreso_de_usuario($user_identificador) {
        $query = $this->db
            ->where('t1.usuario_identificador', $user_identificador)
            ->select("t1.*")
            ->from("usuarios_progreso t1")
            ->get();
        return $query;
    }
}
