
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_grupos extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    function getGrupo() {
    	$this->db->select('id_grupo,Grupo,Profesor_asignado');
        $query = $this->db->get('Grupos');
        return $query->result_array();
    }

    function insertarGrupo() {

    }

    function modificarGrupo() {

    }

    function eliminarGrupo() {

    }
}