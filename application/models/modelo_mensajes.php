
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_mensajes extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
    function getMensaje() {
    	$this->db->select('id_mensaje,Remitente,Destinatarios,Mensaje,FechaHora');
        $query = $this->db->get('Mensajes');
        return $query->result_array();
    }

    function insertarMensaje() {

    }

    function modificarMensaje() {

    }

    function eliminarMensaje($id) {
    	
    }
}