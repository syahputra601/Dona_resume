<?php
defined('BASEPATH') OR exit('no direct sciprt allowed');

Class M_education extends CI_Model{
	function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->education='education';
            date_default_timezone_set("Asia/Jakarta");
		}

	function tampil_data(){
        // $this->db->where('deleted', 0);
        $db = $this->db->get('education');
        return $db;
    }

    function get_data_to_home(){
        $this->db->where('id_education', 1);
        $db = $this->db->get('education');
        return $db;
    }

    function data_editEducation($Id=''){
        $sql = $this->db->query("SELECT * FROM education WHERE id_education='".$Id."'");
        return $sql->result_array();   
    }

    function editEducation($id_education,$highschool,$university) {
		$data = array(
            'University' => $university,
            'Highschool' => $highschool
        );
        $this->db->where('id_education', $id_education);
        $this->db->update('education', $data);
        //echo $this->db->last_query();die();
        $var = $this->db->affected_rows();
        if($var == 1){
            $var = 1;
            return $var;
        }else{
            $var = 2;
            return $var;
        }
    }

}

?>