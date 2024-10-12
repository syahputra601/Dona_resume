<?php
defined('BASEPATH') OR exit('no direct sciprt allowed');

Class M_skill extends CI_Model{
	function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->skill='skill';
            date_default_timezone_set("Asia/Jakarta");
		}

	function tampil_data(){
        // $this->db->where('deleted', 0);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_1(){
        $this->db->where('id_skill', 1);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_2(){
        $this->db->where('id_skill', 2);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_3(){
        $this->db->where('id_skill', 3);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_4(){
        $this->db->where('id_skill', 4);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_5(){
        $this->db->where('id_skill', 5);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_6(){
        $this->db->where('id_skill', 6);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_7(){
        $this->db->where('id_skill', 7);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_8(){
        $this->db->where('id_skill', 8);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_9(){
        $this->db->where('id_skill', 9);
        $db = $this->db->get('skill');
        return $db;
    }

    function get_data_to_home_10(){
        $this->db->where('id_skill', 10);
        $db = $this->db->get('skill');
        return $db;
    }

    function data_editSkill($Id=''){
        $sql = $this->db->query("SELECT * FROM skill WHERE id_skill='".$Id."'");
        return $sql->result_array();   
    }

    function editSkill($id_skill,$name_skill,$range_skill) {
		$data = array(
            'name_skill' => $name_skill,
            'range_skill' => $range_skill
        );
        $this->db->where('id_skill', $id_skill);
        $this->db->update('skill', $data);
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