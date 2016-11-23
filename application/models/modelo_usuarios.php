
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_usuarios extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
   	function getUsuario() {
   		$this->db->select('id_usuario,Nombre,Apellidos,Email,Rol,FechaNacimiento,Contraseña');
        $query = $this->db->get('Usuarios');
        return $query->result_array();
    }

    function insertarUsuario() {

    }

    function modificarUsuario() {

    }

    function eliminarUsuario() {
    	
    }
}