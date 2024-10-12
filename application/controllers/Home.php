<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_Home');
		$this->load->model('M_profile');
		$this->load->model('M_education');
		$this->load->model('M_experience');
		$this->load->model('M_skill');
		$this->load->helper('url');
		$this->load->helper('form');
		// $this->load->library('form_validation');
		// $this->load->library('session');
	}

	function index(){
		$data['Profile'] = $this->M_profile->get_data_to_home()->result_array();
		$data['Education'] = $this->M_education->get_data_to_home()->result_array();
		$data['Experience_1'] = $this->M_experience->get_data_to_home_1()->result_array();
		$data['Experience_2'] = $this->M_experience->get_data_to_home_2()->result_array();
		$data['Experience_3'] = $this->M_experience->get_data_to_home_3()->result_array();
		$data['Skill_1'] = $this->M_skill->get_data_to_home_1()->result_array();
		$data['Skill_2'] = $this->M_skill->get_data_to_home_2()->result_array();
		$data['Skill_3'] = $this->M_skill->get_data_to_home_3()->result_array();
		$data['Skill_4'] = $this->M_skill->get_data_to_home_4()->result_array();
		$data['Skill_5'] = $this->M_skill->get_data_to_home_5()->result_array();
		$data['Skill_6'] = $this->M_skill->get_data_to_home_6()->result_array();
		$data['Skill_7'] = $this->M_skill->get_data_to_home_7()->result_array();
		$data['Skill_8'] = $this->M_skill->get_data_to_home_8()->result_array();
		$data['Skill_9'] = $this->M_skill->get_data_to_home_9()->result_array();
		$data['Skill_10'] = $this->M_skill->get_data_to_home_10()->result_array();
		$x = $this->M_experience->get_data_to_home_3()->result_array();
		// print_r($x);die();
		$this->load->view('Home/v_home',$data);
	}

}

?>