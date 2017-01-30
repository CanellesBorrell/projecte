<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Asignaturas extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_asignaturas');
      $this->load->model('modelo_usuarios');
    }

    // Cargamos la pagina con los datos recibidos de la base de datos

    public function index() {
		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_asignaturas->getAsignatura();
			$usuario = $this->modelo_usuarios->getUsuarios();
			$dades = array(
				'sesio' => $sesio,
				'usuario' => $usuario,
				'data' => $data);
				if($data == null) {
					$this->load->view('asignaturas', $dades);	
				}
				else {

					$this->load->view('asignaturas', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
	}

	// Funcion utilizada para comprovar desde el servidor que los datos estan correctos y pasarlos al modelo para que los inserte en la base de datos.
	public function insertarAsignaturas() {
		/*$this->form_validation->set_rules('Asignatura', 'Asignatura', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El campo %s es obligado');
	
		if($this->form_validation->run() == FALSE) {
			$data = $this->modelo_asignaturas->getAsignatura();
			$this->load->view('asignaturas', $data);
		}
		else {*/
			$asignatura = $this->input->post('Asignatura');
			$this->modelo_asignaturas->insertarAsignatura($asignatura);
			redirect('asignaturas');
		//}
	}

	public function eliminarAsignaturas($id) {
		$this->modelo_asignaturas->eliminarAsignatura($id);
		redirect('Asignaturas/asignaturas');
	}
}