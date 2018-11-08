<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Resources_model extends CI_model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function village_resources($idvillage){
		$query = $this->db->query("CALL web_village_resources('$idvillage')");
		return $query->result();
	}
	
	function village_resource_schedules($idvillage,$resource_type,$limit){
		$query = $this->db->query("CALL web_village_resource_schedules('$idvillage','$resource_type','$limit')");
		return $query->result();	
	}
	
	function war_loot_schedules($idvillage){
		$query = $this->db->query("CALL web_war_loot_schedules('$idvillage')");
		return $query->result();	
	}
	
	function count_war_loot_schedules($idvillage){
		$query = $this->db->query("CALL web_count_war_loot_schedules('$idvillage')");
		return $query->result();	
	}

}