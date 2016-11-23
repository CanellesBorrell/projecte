
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_asignaturas extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    function getAsignatura() {
		$this->db->select('id_asignatura,Asignatura,Profesor_asignado');
        $query = $this->db->get('Asignaturas');
        return $query->result_array();
    }

    function insertarAsignatura() {

    }

    function modificarAsignatura() {

    }

    function eliminarAsignatura() {
    	
    }
}