
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelo_foros extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
        
    }

    function getForo() {
    	$this->db->select('id_foro,Nombre,DiaHora,Descripcion');
        $query = $this->db->get('Foros');
        return $query->result_array();
    }

    function insertarForo($nombre,$diahora,$descripcion) {
        $data = array(
            //'id_usuario'=> $id_usuario,
            'Nombre'=> $nombre,
            'DiaHora'=> $diahora,
            'Descripcion'=> $descripcion
            );
        $this->db->insert('Foros', $data);
    }

    function modificarForo() {

    }

    function eliminarForo($id) {
    	$this->db->delete('Foros', array('id_foro' => $id));
    }
}