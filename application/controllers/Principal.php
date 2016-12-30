<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	
	function __construct() {
      parent::__construct();
      $sesio = $this->session->userdata('logged_in');
    } 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{


		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = null;//$this->modelo_grupos->getGrupo();
				/*if($data == null) {
					$this->load->view('grupos', $sesio);	
				}*/
		//else {
					$dades = array(
						'sesio' => $sesio,
						'data' => $data);
					$this->load->view('index', $dades);
				//}
			}
			
		else{
			redirect('login', 'refresh');
		}
	}
}
