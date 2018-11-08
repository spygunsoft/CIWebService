<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Villages_model extends CI_model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function default_active_village($username){
		$query = $this->db->query("CALL web_default_active_village('$username',@idvillage)");
		$query = $this->db->query("SELECT @idvillage AS idvillage");
		return $query->result();
	}
	
	function village_ranking($idvillage){
		$query = $this->db->query("CALL web_village_ranking('$idvillage')");
		return $query->result();
	}
	
	function villages_rankings(){
		$query = $this->db->query("CALL web_villages_rankings()");
		return $query->result();
	}
	
	function villages_locations($idvillage){
		$query = $this->db->query("CALL web_villages_locations('$idvillage')");
		return $query->result();
	}
	
	function village_location($idvillage,$targetvillage){
		$query = $this->db->query("CALL web_village_location('$idvillage','$targetvillage')");
		return $query->result();
	}

}