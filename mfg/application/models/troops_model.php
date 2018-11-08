<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Troops_model extends CI_model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function troop_attack_schedules($idvillage){
		$query = $this->db->query("CALL web_troop_attack_schedules('$idvillage')");
		return $query->result();	
	}
	
	function count_troop_attack_schedules($idvillage){
		$query = $this->db->query("CALL web_count_troop_attack_schedules('$idvillage')");
		return $query->result();	
	}
	
	function enemy_attack_schedules($idvillage){
		$query = $this->db->query("CALL web_enemy_attack_schedules('$idvillage')");
		return $query->result();	
	}
	
	function villages_troops($idvillage){
		$query = $this->db->query("CALL web_villages_troops('$idvillage')");
		return $query->result();	
	}
	
	function count_enemy_attack_schedules($idvillage){
		$query = $this->db->query("CALL web_count_enemy_attack_schedules('$idvillage')");
		return $query->result();	
	}
	
	function troop_back_schedules($idvillage){
		$query = $this->db->query("CALL web_troop_back_schedules('$idvillage')");
		return $query->result();	
	}
	
	function count_troop_back_schedules($idvillage){
		$query = $this->db->query("CALL web_count_troop_back_schedules('$idvillage')");
		return $query->result();	
	}
	
	function troop_prices(){
		$query = $this->db->query("CALL web_troop_prices()");
		return $query->result();	
	}
	
	function troop_stats(){
		$query = $this->db->query("CALL web_troop_stats()");
		return $query->result();	
	}
	
	function village_troop_build_schedules($idvillage){
		$query = $this->db->query("CALL web_village_troop_build_schedules('$idvillage')");
		return $query->result();	
	}
	
	function count_village_troop_build_schedules($idvillage){
		$query = $this->db->query("CALL web_count_village_troop_build_schedules('$idvillage')");
		return $query->result();	
	}
	
	function order_troop($idvillage,$troop){
		$query = $this->db->query("CALL web_order_troop('$idvillage','$troop')");
		return $query->result();	
	}
	
	function order_attack($idvillage,$troop,$target_village){
		$query = $this->db->query("CALL web_order_attack('$idvillage','$troop','$target_village')");
		return $query->result();	
	}

}