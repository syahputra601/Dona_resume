<?php
defined('BASEPATH') OR exit('no direct sciprt allowed');

Class M_profile extends CI_Model{
	function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->profile='profile';
            date_default_timezone_set("Asia/Jakarta");
		}

	function tampil_data(){
        // $this->db->where('deleted', 0);
        $db = $this->db->get('profile');
        return $db;
    }

    function get_data_to_home(){
        $this->db->where('id_profile', 1);
        $db = $this->db->get('profile');
        return $db;
    }

    function data_editProfile($Id=''){
        $sql = $this->db->query("SELECT * FROM profile WHERE id_profile='".$Id."'");
        return $sql->result_array();   
    }

    function editProfile($id_profile,$nama,$call,$mail,$web,$home,$describe,$twitter,$facebook,$instagram,$linkedin,$hobbies) {
		$data = array(
            'nama_lengkap' => $nama,
            'call' => $call,
            'mail' => $mail,
            'web' => $web,
            'home' => $home,
            'describe_yourself' => $describe,
            'twitter' => $twitter,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'linkedin' => $linkedin,
            'hobbies' => $hobbies
        );
        $this->db->where('id_profile', $id_profile);
        $this->db->update('profile', $data);
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