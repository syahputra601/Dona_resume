<?php
defined('BASEPATH') OR exit('no direct script allowed');

Class Profile extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('M_profile');
		if($this->session->userdata('masuk') != TRUE){
			redirect(base_url('login'));
		}
		date_default_timezone_set("Asia/Jakarta");
	}

	function index(){
		echo "Error 404";
	}

	function List_profile(){
		$data['Profile'] = $this->M_profile->tampil_data()->result();
		$this->load->view('Profile/list_profile',$data);
	}

	public function editProfile($Id=''){
		if($this->session->userdata('level') == 1){
			if($Id==''){
				echo "<script>alert('Failed Get ID Profile.');</script>";
	            redirect('Profile/List_profile','refresh');
			}else{
				$data["Id"]=$Id;
				$data["header"] = $this->M_profile->data_editProfile($Id);
				$data['url_edit'] = base_url().'Profile/edit_profile';
		        $test = $this->M_profile->data_editProfile($Id);
		        //print_r($test);die();
		        $this->load->view("Profile/edit_profile",$data);			
			}
		}else{
			redirect(base_url("login"));
		}
	}

	public function edit_profile(){
		$id_profile = $this->input->post('id_profile', TRUE);
        $nama = $this->input->post('nama', TRUE);
        $call = $this->input->post('call', TRUE);
        $mail = $this->input->post('mail', TRUE);
        $web = $this->input->post('web', TRUE);
        $home = $this->input->post('home', TRUE);
        $describe = $this->input->post('describe', TRUE);
        $twitter = $this->input->post('twitter', TRUE);
        $facebook = $this->input->post('facebook', TRUE);
        $instagram = $this->input->post('instagram', TRUE);
        $linkedin = $this->input->post('linkedin', TRUE);
        $hobbies = $this->input->post('hobbies', TRUE);
        $var = $this->M_profile->editProfile($id_profile,$nama,$call,$mail,$web,$home,$describe,$twitter,$facebook,$instagram,$linkedin,$hobbies);
        // print_r($var);
        // die();
        if($var == 1){
            echo "<script>alert('Berhasil Simpan Data Profile dengan Nama : ".$nama." .');</script>";
            redirect('Profile/List_profile','refresh');
        }elseif($var == 2){
            echo "<script>alert('Gagal Simpan Data Profile dengan Nama : ".$nama.".');</script>";
            redirect('Profile/List_profile','refresh');
        }else{
            echo "<script>alert('Gagal Update Profile.');</script>";
            redirect('Profile/List_profile','refresh');
        }
    }

}

?>