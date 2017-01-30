<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Grupos extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_grupos');
      $this->load->model('modelo_asignaturas');
      $sesio = $this->session->userdata('logged_in');
    } 
   	public function index() {
   		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_grupos->getGrupo();
			$asignatures = $this->modelo_asignaturas->getAsignatura();
			$dades = array(
						'sesio' => $sesio,
						'asignatura' => $asignatures,
						'data' => $data);
				if($data == null) {
					$this->load->view('grupos', $dades);	
				}
				else {
					$this->load->view('grupos', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
	}

	public function index_front() {
   		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_grupos->getGrupo();
			$dades = array(
						'sesio' => $sesio,
						'data' => $data);
				if($data == null) {
					$this->load->view('grupos_p', $dades);	
				}
				else {
					$this->load->view('grupos_p', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
	}

	public function insertarGrupos() {
		$this->form_validation->set_rules('Grupo', 'Grupo', 'required');
		$this->form_validation->set_message('required', 'El campo %s es obligado');
	
		if($this->form_validation->run() == FALSE) {
			$data = $this->modelo_grupos->getGrupo();
			redirect('Grupos');
		}
		else {
			$grupo = $this->input->post('Grupo');
			$this->modelo_grupos->insertarGrupo($grupo);
			redirect('Grupos');
		}
	}

	public function eliminarGrupos($id) {
		$this->modelo_grupos->eliminarGrupo($id);
		redirect('Grupos/grupos');
	}
}