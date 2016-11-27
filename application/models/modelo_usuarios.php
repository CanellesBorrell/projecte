
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_usuarios extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        //$this->sesio = $this->session->userdata('logged_in');
        //$this->id = $this->sesio['id'];
        
    }
   	function getUsuario($idusuario) {
   		$this->db->select('id_usuario,Nombre,Apellidos,Email,Rol,FechaNacimiento');
        $this->db->from('Usuarios');
        $this->db->where('id_usuario',$idusuario);
        $query = $this->db->get('Usuarios');
        return $query->result_array();
    }
    
    function login($username, $password) {
        $this -> db -> select('id_usuario');
        $this -> db -> from('Usuarios');
        $this -> db -> where('Email', $email);
        $this -> db -> where('Contraseña', MD5($password));
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() == 1) {
            return $query->result(); 
        }
        else
        {
            return false;
        }
    }

    function insertarUsuario($usuario, $nombre, $apellidos, $Email, $rol, $password) {
        $data = array(
			'Usuario'=> $usuario,
			'Nombre'=> $nombre,
			'Apellidos'=> $apellidos,
			'Email'=> $Email,
			'Rol'=> $rol,
			'Contraseña'=> MD5($password),
			$this->db->insert('Usuarios', $data));
    }

    function modificarUsuario() {

    }

    function eliminarUsuario($id) {
        $this->db->delete('Usuarios', array('id_usuario' => $id));	
    }
}
