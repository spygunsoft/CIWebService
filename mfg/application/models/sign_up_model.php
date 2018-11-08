<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_up_model extends CI_model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function sign_up($username,$password,$password_conf){
		$query = $this->db->query("CALL web_sign_up('$username','$password','$password_conf',@status)");
		$query = $this->db->query("SELECT @status AS status");
		return $query->result();
	}

}