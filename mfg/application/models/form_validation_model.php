<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Form_validation_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();		
	}

	function username_availability($username){
		$query = $this->db->query("CALL web_username_availability('$username',@availability)");
		$query = $this->db->query("SELECT @availability AS availability");
		return $query->result();
	}
}