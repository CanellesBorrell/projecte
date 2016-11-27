<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Grupos extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_grupos');
    } 
   	public function index() {
   		$data = $this->modelo_grupos->getGrupo();
		if($data == null) {
			$this->load->view('grupos');	
		}
		else {
			$this->load->view('grupos', $data);
		}
	}

	public function insertarGrupos() {
		$this->form_validation->set_rules('Grupo', 'Grupo', 'required|xss_clean');
		$this->form_validation->set_rules('Profesor_asignado', 'Profesor_asignado', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El campo %s es obligado');
	
		if($this->form_validation->run() == FALSE) {
			$data = $this->modelo_grupos->getGrupo();
			$this->load->view('grupos', $data);
		}
		else {
			$grupo = $this->input->post('Grupo');
			$profeasignado = $this->input->post('Profesor_asignado');
			$this->modelo_grupos->insertarGrupo($grupo, $profeasignado);
			redirect('Grupos/grupos');
		}
	}
}