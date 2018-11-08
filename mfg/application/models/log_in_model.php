<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Log_in_model extends CI_model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function log_in($username,$password){
		$query = $this->db->query("CALL web_log_in('$username','$password',@status)");
		$query = $this->db->query("SELECT @status AS status");
		return $query->result();
	}

}