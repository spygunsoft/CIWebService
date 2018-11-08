<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Buildings_model extends CI_model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function village_building_amounts($idvillage,$building){
		$query = $this->db->query("CALL web_village_building_amounts('$idvillage','$building')");
		return $query->result();
	}
	
	function building_prices(){
		$query = $this->db->query("CALL web_building_prices()");
		return $query->result();
	}
	
	function village_building_build_schedules($idvillage){
		$query = $this->db->query("CALL web_village_building_build_schedules('$idvillage')");
		return $query->result();
	}
	
	function count_village_building_build_schedules($idvillage){
		$query = $this->db->query("CALL web_count_village_building_build_schedules('$idvillage')");
		return $query->result();
	}
	
	function order_building($idvillage,$building){
		$query = $this->db->query("CALL web_order_building('$idvillage','$building')");
		return $query->result();
	}
}