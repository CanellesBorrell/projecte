<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Foros extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_foros');
    }

  	public function index() {
  		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_foros->getForo();
			$dades = array(
				'sesio' => $sesio,
				'data' => $data);
				if($data == null) {
					$this->load->view('foros', $dades);	
				}
				else {

					$this->load->view('foros', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}

	}

	public function insertarForos() {
		$this->form_validation->set_rules('Nombre', 'Nombre', 'required|xss_clean');
		$this->form_validation->set_rules('DiaHora', 'DiaHora', 'required|xss_clean');
		$this->form_validation->set_rules('Descripcion', 'Descripcion', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El campo %s es obligado');
	
		if($this->form_validation->run() == FALSE) {
			$data = $this->modelo_foros->getForo();
			$this->load->view('foros', $data);
		}
		else {
			//$id_usuario =  // La recibimos de la session
			$nombre = $this->input->post('Nombre');
			$diahora = $this->input->post('DiaHora');
			$descripcion = $this->input->post('Descripcion');
			$this->modelo_foros->insertarForo(/*$id_usuario,*/$nombre, $diahora, $descripcion);
			redirect('Foros/foros');
		}
	}

	public function eliminarForos($id) {
		$this->modelo_foros->eliminarForo($id);
		redirect('Foros/foros');

	}
}