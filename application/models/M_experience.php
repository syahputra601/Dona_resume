<?php
defined('BASEPATH') OR exit('no direct sciprt allowed');

Class M_experience extends CI_Model{
	function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->experience='experience';
            date_default_timezone_set("Asia/Jakarta");
		}

	function tampil_data(){
        // $this->db->where('deleted', 0);
        $db = $this->db->get('experience');
        return $db;
    }

    function get_data_to_home_1(){
        $this->db->where('id_experience', 1);
        $db = $this->db->get('experience');
        return $db;
    }

    function get_data_to_home_2(){
        $this->db->where('id_experience', 2);
        $db = $this->db->get('experience');
        return $db;
    }

    function get_data_to_home_3(){
        $this->db->where('id_experience', 3);
        $db = $this->db->get('experience');
        return $db;
    }

    function data_editExperience($Id=''){
        $sql = $this->db->query("SELECT * FROM experience WHERE id_experience='".$Id."'");
        return $sql->result_array();   
    }

    function editExperience($id_experience,$company,$dates,$position,$jobdesk) {
		$data = array(
            'Company' => $company,
            'Dates' => $dates,
            'Position' => $position,
            'Jobdesk' => $jobdesk
        );
        $this->db->where('id_experience', $id_experience);
        $this->db->update('experience', $data);
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