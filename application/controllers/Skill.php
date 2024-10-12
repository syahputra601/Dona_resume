<?php
defined('BASEPATH') OR exit('no direct script allowed');

Class Skill extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('M_skill');
		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url('login'));
		}
		date_default_timezone_set("Asia/Jakarta");
	}

	function index(){
		echo "Error 404";
	}

	function List_skill(){
		$data['Skill'] = $this->M_skill->tampil_data()->result();
		$this->load->view('Skill/list_skill',$data);
	}

	public function editSkill($Id=''){
		if($this->session->userdata('level') == 1){
			if($Id==''){
				echo "<script>alert('Failed Get ID Skill.');</script>";
	            redirect('Skill/list_skill','refresh');
			}else{
				$data["Id"]=$Id;
				$data["header"] = $this->M_skill->data_editSkill($Id);
				$data['url_edit'] = base_url().'Skill/edit_skill';
		        $test = $this->M_skill->data_editSkill($Id);
		        //print_r($test);die();
		        $this->load->view("Skill/edit_skill",$data);			
			}
		}else{
			redirect(base_url("login"));
		}
	}

	public function edit_skill(){
		$id_skill = $this->input->post('id_skill', TRUE);
        $name_skill = $this->input->post('name_skill', TRUE);
        $range_skill = $this->input->post('range_skill', TRUE);
        $var = $this->M_skill->editSkill($id_skill,$name_skill,$range_skill);
        // print_r($var);
        // die();
        if($var == 1){
            echo "<script>alert('Berhasil Simpan Data Skill.');</script>";
            redirect('Skill/list_skill','refresh');
        }elseif($var == 2){
            echo "<script>alert('Gagal Simpan Data Skill.');</script>";
            redirect('Skill/list_skill','refresh');
        }else{
            echo "<script>alert('Gagal Update Skill.');</script>";
            redirect('Skill/list_skill','refresh');
        }
    }

}

?>