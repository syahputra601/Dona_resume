<?php
defined('BASEPATH') OR exit('no direct script allowed');

Class Security extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function token()
	{
		// load helper
		$this->load->helper('string');
		// echo '<h2 style="color:salmon">Random String codeigniter</h2>';
		// buat random string
		//echo 'Random string alpha   = <b>'. random_string('alpha', 20).'</b><br>';
		// echo 'Random string alnum = <b>'. random_string('alnum', 30).'</b><br>';
		// echo 'Random string basic = <b>'. random_string('basic').'</b><br>';
		// echo 'Random string numeric = <b>'. random_string('numeric', 40).'</b><br>';
		// echo 'Random string nozero = <b>'. random_string('nozero', 45).'</b><br>';
		// echo 'Random string md5 = <b>'. random_string('md5').'</b><br>';
		// echo 'Random string sha1 = <b>'. random_string('sha1').'</b><br>';
		$token = random_string('alnum', 10);
		return $token;
	}
}

?>