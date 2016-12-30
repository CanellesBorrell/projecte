
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelo_grupos extends CI_Model{
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

    function insertarGrupo($grupo, $profesorasig) {
        $data = array(
            'Grupo'=> $grupo,
            'Profesor_asignado'=> $profesorasig);
        $this->db->insert('Grupos', $data);
    }

    function modificarGrupo() {

    }

    function eliminarGrupo($id) {
        $this->db->delete('Grupos', array('id_grupo' => $id));
    }
}