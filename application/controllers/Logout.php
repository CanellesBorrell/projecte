<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logout extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->helper('url');
      $this->load->library('session');
    } 


public function index()
	//es carrega la sessió.
	{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('login', 'refresh');
	}
}

