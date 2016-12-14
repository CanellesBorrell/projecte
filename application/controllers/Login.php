<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->helper('url');
      $this->load->model('Modelo_usuarios');
      $this->load->library('session');
    } 

	
    function index() {
		//Metode de login
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean'); 
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database'); // aqui es pasa la password al metode check_database i es comprova si el login es correcte
		if($this->form_validation->run() == FALSE) { //si el login ha fallat
			$this->load->view('login_full'); //tornem a carregar el login
		}
		else { // si ha anat be
			//anirem a l'area privada
			redirect('/asdasdindex', 'refresh');
		}
	}
	
	function check_database($password) {
		//Aqui mirarem si ha posat be la password i per tant si es correcte o no el login
		$email = $this->input->post('email');
		//fem la query on modelo_usuarios es el model i login le funcio
		$result = $this->Modelo_usuarios->login($email, $password); 
	   if($result){ // si ha anat be
			$sess_array = array(); // guardarem a la variable de sessio totes les dades
			
			foreach($result as $row) { //per a fer-ho anem omplintla
				$sess_array = array(
				'id_usuario' => $row->id_usuario, //id del usuari
				'Nombre' => $row->Nombre, //Nom de l'usuari
				'Apellidos' => $row->Apellidos, //Cognom de l'usuari
				'id_rol' => $row->id_rol, //rol de l'usuari
				'Email' => $row->Email, //email del usuari
				'id_escuela' => $row->id_escuela // id de la escola
				);
			$this->session->set_userdata('logged_in', $sess_array); // i de paso marquem com a que esta loguejat
			}
			redirect('../', 'refresh');
		return TRUE;
		}
		
   else { // si no es logueja correctament mostrem missatge
	   $this->form_validation->set_message('check_database', "Email o contraseña incorrectos");
	   return false;
   }
 }
}

