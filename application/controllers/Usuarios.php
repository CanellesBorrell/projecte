<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuarios extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_usuarios');
      $this->load->helper('form');
      
    } 

	
    public function index() {

		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_usuarios->getUsuarios();
			$dades = array(
						'sesio' => $sesio,
						'data' => $data);
				if($data == null) {
					$this->load->view('usuarios', $dades);	
				}
				else {
					$this->load->view('usuarios', $dades);
				}
		}
		else{
			redirect('login', 'refresh');
		}
    	
	}

	public function insertarUsuarios() {
		if($this->session->userdata('logged_in')){
			//aqui mirare si el loguejat es admin o director
		//if($this->session->userdata('admin o director (codi inventat)') //si es admin o director 
		//{
			
			
			
			//podra fer els inserts
			
			$this->form_validation->set_rules('Nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('Apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('Rol', 'Rol', 'required');
			$this->form_validation->set_rules('Fecha', 'Fecha', 'required');
			$this->form_validation->set_rules('Contraseña', 'Contraseña', 'required');
			$this->form_validation->set_message('required', 'El campo %s es obligado');
	
			if($this->form_validation->run() == FALSE) {
				
				$data = null;
				$sesio = $this->session->userdata('logged_in');
				$dades = array(
						'sesio' => $sesio,
						'data' => $data);
				
				$this->load->view('insertarUsuarios', $dades);
			}
			else {
				$nombre = $this->input->post('Nombre');
				$apellido = $this->input->post('Apellido');
				$email = $this->input->post('Email');
				$rol = $this->input->post('Rol');
				$fechanacimiento = $this->input->post('Fecha');
				$contraseña = $this->input->post('Contraseña');
				IF ($this->modelo_usuarios->insertarUsuario($nombre, $apellido, $email,$rol ,$fechanacimiento, $contraseña) == true){
					
					redirect('usuarios');
				}
				else{
					redirect('login');}
			}
		 }

	}

	public function eliminarUsuarios($id) {
		
		$this->modelo_usuarios->eliminarUsuario($id);
		redirect('usuarios');
	}

	public function modificarUsuario($id) {
		$nombre = $this->input->post('Nombre');
		$apellido = $this->input->post('Apellido');
		$email = $this->input->post('Email');
		$password = $this->input->post('Password');
		$this->modelo_usuarios->modificarUsuario($id);
		redirect('usuarios');
	}
}
