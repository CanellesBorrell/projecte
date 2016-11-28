<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tareas extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_tareas');
    } 

    	public function index() {
		$data = $this->modelo_tareas->getTarea();
		if($data == null) {
			$this->load->view('tareas');	
		}
		else {
			$this->load->view('tareas', $data);
		}
	}

	// Tener en cuenta que este insertar en ningun momento esta subiendo el archivo al directorio del servidor
	public function insertarTareas() {
		$this->form_validation->set_rules('Nombre', 'Nombre', 'required|xss_clean');
		$this->form_validation->set_rules('Archivo', 'Archivo', 'required|xss_clean');
		$this->form_validation->set_rules('Data_vencimiento', 'Data_vencimiento', 'required|xss_clean');
		$this->form_validation->set_rules('Profesor_asignado', 'Profesor_asignado', 'required|xss_clean');
		$this->form_validation->set_rules('Comentario', 'Comentario', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El campo %s es obligado');
	
		if($this->form_validation->run() == FALSE) {
			$data = $this->modelo_tareas->getTarea();
			$this->load->view('tareas', $data);
		}
		else {
			$nombre = $this->input->post('Nombre');
			$archivo = $this->input->post('Archivo');
			$data_vencimiento = $this->input->post('Data_vencimiento');
			$profeasignado = $this->input->post('Profesor_asignado');
			$comentario = $this->input->post('Comentario');
			$this->modelo_tareas->insertarTarea($nombre,$archivo,$data_vencimiento,$profeasignado,$comentario);
			redirect('Tareas/tareas');
		}
	}

	public function eliminarTareas($id) {
		$this->modelo_tareas->eliminarTarea($id);
		redirect('Tareas/tareas');
	}

// Futuro codigo de insertar tarea xD cuidado con el puto upload tenemos que comprovar si tenemos una version mejor.
	/*	public function upload() {
		$data['content'] = 'Tareas';
		$this->load->vars($data);
		$this->load->view('Tareas');
	}

	public function DoUpload() {

		$config_file = array (
		'upload_path' => './tareas/',
		'allowed_types' => 'pdf|doc|docx|zip|rar|tar.gz',
		'overwrite' => false,
		'max_size' => 0,
		'max_width' => 0,
		'max_height' => 0,
		'encrypt_name' => false,
		'remove_spaces' => true,
		);
		$this->upload->initialize($config_file);
		if (!$this->upload->do_upload('cipote')) {
			redirect('welcome/partitura');
			$error = $this->upload->display_errors();
			echo $error;
		}
		else {
			$this->session->set_flashdata('success_upload','Pujat Correcament');
			$nom = $this->upload->file_name;
			$file_name = base_url()."partitures/".$this->upload->file_name;
			$this->model_concerts->insertPartitures($nom, $file_name);
			redirect(Tareas/tarea)
			}
	}*/
}