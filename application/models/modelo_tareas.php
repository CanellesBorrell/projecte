
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_tareas extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
    function getTarea() {
    	$this->db->select('id_tarea,id_asignatura,Nombre,Archivo,Data_vencimiento,Profesor_asignado,Comentario');
        $query = $this->db->get('Tareas');
        return $query->result_array();
    }

    function insertarTarea($nombre, $archivo, $datavencimiento, $profesorassig, $comentario) {
         $data = array(
            'Nombre'=> $nombre,
            'Archivo'=> $archivo,
            'Data_vencimiento'=> $datavencimiento,
            'Profesor_asignado'=> $profesorassig,
            'Comentario'=> $comentario
            $this->db->insert('Tareas', $data));
    }

    function modificarTarea() {

    }

    function eliminarTarea($id) {
        $this->db->delete('Tareas', array('id_tarea' => $id));
    }
}