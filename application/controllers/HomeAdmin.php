<?php
defined('BASEPATH') OR exit('No direct script allowed');

Class HomeAdmin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('M_HomeAdmin');
		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url("login"));
		}
		// if($this->session->userdata('role') == 1){
			// redirect(base_url("login"));
		// }
	}

	public function index(){
		$this->load->view('Tamplates/header');
		$this->load->view('v_indexAdmin');
		$this->load->view('Tamplates/footer');
	}

}


?>