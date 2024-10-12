<?php
defined('BASEPATH') OR exit('no direct script allowed');

Class Education extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('M_education');
		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url('login'));
		}
		date_default_timezone_set("Asia/Jakarta");
	}

	function index(){
		echo "Error 404";
	}

	function List_education(){
		$data['Education'] = $this->M_education->tampil_data()->result();
		$this->load->view('Education/list_education',$data);
	}

	public function editEducation($Id=''){
		if($this->session->userdata('level') == 1){
			if($Id==''){
				echo "<script>alert('Failed Get ID Education.');</script>";
	            redirect('Education/list_education','refresh');
			}else{
				$data["Id"]=$Id;
				$data["header"] = $this->M_education->data_editEducation($Id);
				$data['url_edit'] = base_url().'Education/edit_education';
		        $test = $this->M_education->data_editEducation($Id);
		        //print_r($test);die();
		        $this->load->view("Education/edit_education",$data);			
			}
		}else{
			redirect(base_url("login"));
		}
	}

	public function edit_education(){
		$id_education = $this->input->post('id_education', TRUE);
        $highschool = $this->input->post('highschool', TRUE);
        $university = $this->input->post('university', TRUE);
        $var = $this->M_education->editEducation($id_education,$highschool,$university);
        // print_r($var);
        // die();
        if($var == 1){
            echo "<script>alert('Berhasil Simpan Data Education.');</script>";
            redirect('Education/list_education','refresh');
        }elseif($var == 2){
            echo "<script>alert('Gagal Simpan Data Education.');</script>";
            redirect('Education/list_education','refresh');
        }else{
            echo "<script>alert('Gagal Update Education.');</script>";
            redirect('Education/list_education','refresh');
        }
    }

}

?>