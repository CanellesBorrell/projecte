<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Foros extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_foros');
    }

  	public function index() {
  		$data = $this->modelo_foros->getForo();
		if($data == null) {
			$this->load->view('foros');	
		}
		else {
			$this->load->view('foros', $data);
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
}