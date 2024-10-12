<?php
defined('BASEPATH') OR exit('no direct script allowed');

Class Experience extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('M_experience');
		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url('login'));
		}
		date_default_timezone_set("Asia/Jakarta");
	}

	function index(){
		echo "Error 404";
	}

	function List_experience(){
		$data['Experience'] = $this->M_experience->tampil_data()->result();
		$this->load->view('Experience/list_experience',$data);
	}

	public function editExperience($Id=''){
		if($this->session->userdata('level') == 1){
			if($Id==''){
				echo "<script>alert('Failed Get ID Experience.');</script>";
	            redirect('Experience/list_experience','refresh');
			}else{
				$data["Id"]=$Id;
				$data["header"] = $this->M_experience->data_editExperience($Id);
				$data['url_edit'] = base_url().'Experience/edit_experience';
		        $test = $this->M_experience->data_editExperience($Id);
		        //print_r($test);die();
		        $this->load->view("Experience/edit_experience",$data);			
			}
		}else{
			redirect(base_url("login"));
		}
	}

	public function edit_experience(){
		$id_experience = $this->input->post('id_experience', TRUE);
        $company = $this->input->post('company', TRUE);
        $dates = $this->input->post('dates', TRUE);
        $position = $this->input->post('position', TRUE);
        $jobdesk = $this->input->post('jobdesk', TRUE);
        $var = $this->M_experience->editExperience($id_experience,$company,$dates,$position,$jobdesk);
        // print_r($var);
        // die();
        if($var == 1){
            echo "<script>alert('Berhasil Simpan Data Experience.');</script>";
            redirect('Experience/list_experience','refresh');
        }elseif($var == 2){
            echo "<script>alert('Gagal Simpan Data Experience.');</script>";
            redirect('Experience/list_experience','refresh');
        }else{
            echo "<script>alert('Gagal Update Experience.');</script>";
            redirect('Experience/list_experience','refresh');
        }
    }

}

?>